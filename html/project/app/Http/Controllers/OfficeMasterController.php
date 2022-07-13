<?php

namespace App\Http\Controllers;

use App\Models\OfficeMaster;
use Illuminate\Http\Request;

class OfficeMasterController extends Controller
{
/**
    * Display a listing of the resource.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    // public function index(Request $request)
    // {
    //     $form = $request['axreq'];
    //     switch($form)
    //     {
    //         case 'All':
    //             $OfficeMasterData = OfficeMaster::all();
    //             break;

    //         case 'Single':
    //             $id = $request['id'];
    //             $OfficeMasterData = OfficeMaster::where('id',$id)->first(); 
    //             break;

    //         case 'Update':
    //             $OfficeMasterData = OfficeMaster::find($request['id']);

    //             //更新データ
    //             $OfficeMasterData->id = $request['id'];
    //             $OfficeMasterData->name = $request['name'];
    //             $OfficeMasterData->phonenumber = $request['phonenumber'];
    //             $OfficeMasterData->gender = $request['gender'];
    //             $OfficeMasterData->save();
    //             break;

    //         case 'AddSingle':
    //             $OfficeMasterData = new OfficeMaster();

    //             //新規データ
    //             $OfficeMasterData->id = $request['id'];
    //             $OfficeMasterData->name = $request['name'];
    //             $OfficeMasterData->phonenumber = $request['phonenumber'];
    //             $OfficeMasterData->gender = $request['gender'];
    //             $OfficeMasterData->save();
    //             break;

    //         //複数レコード更新【未実装】
    //         case 'UpdateMulti':
    //             //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
    //             break;

    //         //複数レコード追加【未実装】
    //         case 'AddMulti':
    //             //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
    //             break;

    //         //検索
    //         case 'Search':
    //             $OfficeMasterQuery = OfficeMaster::query();
    //             $search_request_datas = json_decode( $request->search_data , true ) ;

    //             foreach($search_request_datas as $search_data)
    //             {
    //                 if(strcmp($search_data['orand'], "or") == 0)
    //                 {
    //                     $OfficeMasterQuery = $OfficeMasterQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
    //                 }else{
    //                     $OfficeMasterQuery = $OfficeMasterQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
    //                 }
    //             }
    //             $OfficeMasterData = $OfficeMasterQuery->get();
    //             break;

    //         //削除フラグ更新【未実装】
    //         case 'DelFlg':
    //             //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
    //             break;

    //         //削除【未実装】
    //         case 'Delete':
    //             //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
    //             break;

    //         default:
    //             $OfficeMasterData = OfficeMaster::all();
    //             break;
    //     }
    //     $viewBag = {
    //         'list' => $OfficeMasterData,
    //         'form' => $form,
    //     }
    //     // return $OfficeMasterData;
    //     return view('all.index', $viewBag);
    // }
    public function index(Request $request)
    {
        $url = "get.all";
        switch($request['axreq'])
        {
            case 'All':
                $OfficeMasterData = OfficeMaster::all();
                break;

            case 'Single':
                $url = "get.single";
                $id = $request['id'];
                $OfficeMasterData = OfficeMaster::where('id',$id)->first(); 
                break;

            case 'Update':
                $url = "/";
                $OfficeMasterData = OfficeMaster::find($request['id']);

                //更新データ
                $OfficeMasterData->id = $request['id'];
                $OfficeMasterData->name = $request['name'];
                $OfficeMasterData->phonenumber = $request['phonenumber'];
                $OfficeMasterData->gender = $request['gender'];
                $OfficeMasterData->save();

                $returnStr = "レコードの更新が成功しました";

                $viewBag = [
                    'message' => $returnStr,
                ];

                return view('welcome' , $viewBag);
                break;

            case 'AddSingle':
                $url = "/";
                $OfficeMasterData = new OfficeMaster();

                //新規データ
                $OfficeMasterData->id = $request['id'];
                $OfficeMasterData->name = $request['name'];
                $OfficeMasterData->phonenumber = $request['phonenumber'];
                $OfficeMasterData->gender = $request['gender'];
                $OfficeMasterData->save();

                $returnStr = "レコードの追加が成功しました";

                $viewBag = [
                    'message' => $returnStr,
                ];

                return view('welcome' , $viewBag);
                break;

            //複数レコード更新【未実装】
            case 'UpdateMulti':
                //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
                break;

            //複数レコード追加【未実装】
            case 'AddMulti':
                //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
                break;

            //検索
            case 'Search':
                $OfficeMasterQuery = OfficeMaster::query();
                $search_request_datas = json_decode( $request->search_data , true ) ;

                foreach($search_request_datas as $search_data)
                {
                    if(strcmp($search_data['orand'], "or") == 0)
                    {
                        $OfficeMasterQuery = $OfficeMasterQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
                    }else{
                        $OfficeMasterQuery = $OfficeMasterQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
                    }
                }
                $OfficeMasterData = $OfficeMasterQuery->get();
                break;

            //削除フラグ更新【未実装】
            case 'DelFlg':
                //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
                break;

            //削除【未実装】
            case 'Delete':
                //$OfficeMasterData= OfficeMaster::all();::where('id',8)->get();
                break;

            default:
                $OfficeMasterData = OfficeMaster::all();
                break;
        }
        // return $OfficeMasterData;
        return view($url, ['list' => $OfficeMasterData]);
    }
}
