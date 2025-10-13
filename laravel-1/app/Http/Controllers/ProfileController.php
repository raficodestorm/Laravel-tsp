<?php
$user = Auth::user();
$profile = $user->profile;
if (!$profile) {
return redirect()->route('profile.create');
}
return view('profile.edit', compact('user', 'profile'));



public function update(Request $request)
{
$user = Auth::user();
$profile = $user->profile;


$data = $request->validate([
'website' => 'nullable|url|max:255',
'phone' => 'nullable|string|max:50',
'address' => 'nullable|string|max:255',
'profile_picture' => 'nullable|image|max:2048',
'bio' => 'nullable|string|max:2000',
]);


if ($request->hasFile('profile_picture')) {
// delete old if exists
if ($profile && $profile->profile_picture) {
Storage::disk('public')->delete($profile->profile_picture);
}
$path = $request->file('profile_picture')->store('profiles', 'public');
$data['profile_picture'] = $path;
}


if ($profile) {
$profile->update($data);
} else {
$user->profile()->create($data);
}


return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
}
