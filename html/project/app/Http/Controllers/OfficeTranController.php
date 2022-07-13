<?php

namespace App\Http\Controllers;

use App\Models\OfficeTran;
use Illuminate\Http\Request;

class OfficeTranController extends Controller
{
/**
* Display a listing of the resource.
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
    switch($request['axreq'])
    {
        case 'All':
            $OfficeTranData = OfficeTran::all();
            break;

        case 'Single':
            $id = $request['commentid'];
            $OfficeTranData = OfficeTran::where('commentid',$id)->first(); 
            break;

        case 'Update':
            $OfficeTranData = OfficeTran::find($request['id']);

            //更新データ
            $OfficeTranData->commentid = $request['commentid'];
            $OfficeTranData->id = $request['id'];
            $OfficeTranData->title = $request['title'];
            $OfficeTranData->comment = $request['comment'];
            $OfficeTranData->id = $request['id'];
            $OfficeTranData->save();
            break;

        case 'AddSingle':
            $OfficeTranData = new OfficeTran();

            //新規データ
            $OfficeTranData->commentid = $request['commentid'];
            $OfficeTranData->id = $request['id'];
            $OfficeTranData->title = $request['title'];
            $OfficeTranData->comment = $request['comment'];
            $OfficeTranData->id = $request['id'];
            $OfficeTranData->save();
            break;

        //複数レコード更新【未実装】
        case 'UpdateMulti':
            //$OfficeTranData= OfficeTran::all();::where('id',8)->get();
            break;

        //複数レコード追加【未実装】
        case 'AddMulti':
            //$OfficeTranData= OfficeTran::all();::where('id',8)->get();
            break;

        //検索
        case 'Search':
            $OfficeTranQuery = OfficeTran::query();
            $search_request_datas = json_decode( $request->search_data , true ) ;

            foreach($search_request_datas as $search_data)
            {
                if(strcmp($search_data['orand'], "or") == 0)
                {
                    $OfficeTranQuery = $OfficeTranQuery->orWhere($search_data['column'],$search_data['sign'] ,$search_data['value']);
                }else{
                    $OfficeTranQuery = $OfficeTranQuery->Where($search_data['column'],$search_data['sign'] ,$search_data['value']);
                }
            }
            $OfficeTranData = $OfficeTranQuery->get();
            break;

        //削除フラグ更新【未実装】
        case 'DelFlg':
            //$OfficeTranData= OfficeTran::all();::where('id',8)->get();
            break;

        //削除【未実装】
        case 'Delete':
            //$OfficeTranData= OfficeTran::all();::where('id',8)->get();
            break;

        default:
            $OfficeTranData = OfficeTran::all();
            break;
    }
    return $OfficeTranData;
}
}
