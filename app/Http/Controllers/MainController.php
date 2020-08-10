<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendFormRequest;
use App\Encoder;
use App\F11;
use App\F60;
use App\F61;
use App\F63;
use App\F71;
use App\F76;
use App\Log;
use DB;


class MainController extends Controller
{
    public function  __construct(
        Encoder $encoder,
        F11 $f11, 
        F60 $f60, 
        F61 $f61, 
        F63 $f63, 
        F71 $f71, 
        F76 $f76 
    ){
        $this->encoder = $encoder;
        $this->f11 = $f11;
        $this->f60 = $f60;
        $this->f61 = $f61;
        $this->f63 = $f63;
        $this->f71 = $f71;
        $this->f76 = $f76;
        
    }


    /**
     * Home page
     */
    public function index(){

        $connected = @fsockopen("www.google.com", 80); 

        if(!$connected){
            return view('error.error');
        }

        $members = $this->f11->getAllTheMembers();
        $encoders = $this->encoder->getAllTheEncoders();

        return view('home')->with('encoders', $encoders);
    }



    /**
     * Sending the data to the server
     */
    public function send(SendFormRequest $request){

        $connected = @fsockopen("www.google.com", 80); 

        if(!$connected){
            return view('error.error');
        }

        $data = $request->except('_token');
        $fullName = $data['full_name'];
        $eacode = $data['eacode'];
        $hcn = $data['hcn'];
        $shsn = $data['shsn'];

        if ($data !== null) {

            /**
             * Getting the data and count of each table
             * based on the conditions.
             */ 

            $f60 = $this->f60->getTheForm60($eacode, $hcn, $shsn);
            $f60Count = $this->f60->getTheForm60Count($eacode, $hcn, $shsn);

            $f61 = $this->f61->getTheForm61($eacode, $hcn, $shsn);
            $f61Count = $this->f61->getTheForm61Count($eacode, $hcn, $shsn);

            $f63 = $this->f63->getTheForm63($eacode, $hcn, $shsn);
            $f63Count = $this->f63->getTheForm63Count($eacode, $hcn, $shsn);

            $f71 = $this->f71->getTheForm71($eacode, $hcn, $shsn);
            $f71Count = $this->f71->getTheForm71Count($eacode, $hcn, $shsn);

            $f76 = $this->f76->getTheForm76($eacode, $hcn, $shsn);
            $f76Count = $this->f76->getTheForm76Count($eacode, $hcn, $shsn);

        }


        /**
         * Insert each table data 
         * when not null.
         */ 

        if ($f60 && $f60Count > 0) {
            $insertF60 = DB::connection('mysql')->table('d_f60')->insertIgnore($f60);
        }
        
        if ($f61 && $f61Count > 0) {
            $insertF61 = DB::connection('mysql')->table('d_f61')->insertIgnore($f61);
        }

        if ($f63  && $f63Count > 0) {
            $insertF63 = DB::connection('mysql')->table('d_f63')->insertIgnore($f63);
        }

        if ($f71  && $f71Count > 0) {
            $insertF71 = DB::connection('mysql')->table('d_f71')->insertIgnore($f71);
        }
        
        if ($f76  && $f76Count > 0) {
            $insertF76 = DB::connection('mysql')->table('d_f76')->insertIgnore($f76);
        }
        

        /**
         * Creating Logs for dashboard
         */
        if (($f60 && $f60Count > 0) || 
            ($f61 && $f61Count > 0) || 
            ($f63  && $f63Count > 0) || 
            ($f71  && $f71Count > 0) || 
            ($f76  && $f76Count > 0) 
        ){

            Log::create([
                'full_name' => $fullName,
                'eacode' => $eacode,
                'hcn' => $hcn,
                'shsn' => $shsn,
                'f60_count' => $f60Count,
                'f61_count' => $f61Count,
                'f63_count' => $f63Count,
                'f71_count' => $f71Count,
                'f76_count' => $f76Count
            ]);

            return redirect()->back()->with('success', 'Nice! Data successfully transmitted.');
        }

        return redirect()->back()->with('error', 'Oooops! Please enter a valid EACODE , HCN and SHSN.');

    }
}
