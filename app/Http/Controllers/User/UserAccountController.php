<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    /**
    * Show the form for creating a new user account.
    *
    * @return \Illuminate\View\View
    */
   public function create()
   {
       return view('user_accounts.create');
   }

   /**
    * Store a newly created user account in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    */
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'location' => 'required|string',
           'household_size' => 'required|integer',
           'energy_consumption' => 'required|numeric',
           'transportation' => 'required|string',
           'food_consumption' => 'required|string',
           'waste_disposal' => 'required|string',
           'lifestyle_choices' => 'required|string',
       ]);

       // Assuming you are using the authenticated user to associate the user account
       $user = auth()->user();

       $user->userAccount()->create($validatedData);

       return redirect()->route('user_accounts.index')->with('success', 'User account created successfully.');
   }

   /**
    * Show the form for editing the specified user account.
    *
    * @param  \App\Models\UserAccount  $userAccount
    * @return \Illuminate\View\View
    */
   public function edit(UserAccount $userAccount)
   {
       return view('user_accounts.edit', compact('userAccount'));
   }

   /**
    * Update the specified user account in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\UserAccount  $userAccount
    * @return \Illuminate\Http\RedirectResponse
    */
   public function update(Request $request, UserAccount $userAccount)
   {
       $validatedData = $request->validate([
           'location' => 'required|string',
           'household_size' => 'required|integer',
           'energy_consumption' => 'required|numeric',
           'transportation' => 'required|string',
           'food_consumption' => 'required|string',
           'waste_disposal' => 'required|string',
           'lifestyle_choices' => 'required|string',
       ]);

       $userAccount->update($validatedData);

       return redirect()->route('user_accounts.index')->with('success', 'User account updated successfully.');
   }

   /**
    * Remove the specified user account from storage.
    *
    * @param  \App\Models\UserAccount  $userAccount
    * @return \Illuminate\Http\RedirectResponse
    */
   public function destroy(UserAccount $userAccount)
   {
       $userAccount->delete();

       return redirect()->route('user_accounts.index')->with('success', 'User account deleted successfully.');
   }
}
