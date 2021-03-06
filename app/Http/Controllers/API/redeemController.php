<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Redeem;
use App\Users_redeem;

class redeemController extends Controller
{
	/*
		
		Controller for the redeemment section 
	
	*/
    public function ajaxImageUploadPost(Request $request)
	{
		$imageName = $request->name . '.jpg';

		$request->file('image')->move(
			base_path() . '/public/assets/img/redeem/', $imageName
		);
		
		return response()->json(['success'=>true,'message'=>'Image uploaded']); 
    }
			
	
    public function getTotal()
    {		
        $redeem = Redeem::all()->count();
		return response()->json(['success'=>true,'total'=>$redeem]);
    }
		
	
    public function getRedeem()
    {		
        $redeem = Redeem::all();
		return response()->json(['success'=>true,'message'=>'','body'=>$redeem]);
    }
 
    public function findRedeem($id)
    {
		$redeem = Redeem::find($id);		
        return response()->json(['success'=>true,'message'=>'','body'=>$redeem]);
    }

    public function createRedeem(Request $request)
    {
        $redeem= Redeem::create($request->all());
        return response()->json(['success'=>true,'message'=>'Challenge created','body'=>$redeem]);
    }

    public function editRedeem(Request $request, $id)
    {
		$redeem = Redeem::find($id);
        $redeem->update($request->all());
       return response()->json(['success'=>true,'message'=>'Challenge edited','body'=>$redeem]);
    }

    public function deleteRedeem($id)
    {
		$redeem = Redeem::find($id);
        $redeem->delete();
        return response()->json(['success'=>true,'message'=>$redeem->title.' deleted']);
    }


	
	/*
		
		Controller for the user redeemment record section 
	
	*/

    public function getUserRedeem($id)
    {
		$redeem = Users_redeem::where('userID',$id)->orderBy('created_at','DESC')->get();		
        return response()->json(['success'=>true,'message'=>'','body'=>$redeem]);

    }

    public function createUserRedeem(Request $request)
    {

        $redeem= Users_redeem::create($request->all());
        return response()->json(['success'=>true,'message'=>'User redeem created','body'=>$redeem]);

    }

    public function editUserRedeem(Request $request, $id)
    {
		$redeem = Users_redeem::find($id);
        $redeem->update($request->all());
       return response()->json(['success'=>true,'message'=>'User redeem edited','body'=>$redeem]);
    }



    public function deleteUserRedeem(Request $request,$id)
    {
		if($request->has('userID'))
		{
			 $userID = $request->userID;
			 $coach = Users_redeem::where('redeemID',$id)->where('userID',$userID); 
			 $coach->delete();
			 return response()->json(['success'=>true,'message'=>' deleted']);	
		}
		else 
		{
			 return response()->json(['success'=>false,'message'=>'Invalid request: userID not found.']);
		}
       
    }	


}
