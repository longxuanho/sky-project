<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(
			[
				'name' => 'Long Hồ',
				'email' => 'longxuanho@gmail.com',
				'password' => Hash::make('Sky@04021990#'),
				'avatar' => 'assets/images/avatars/L.jpg',
				'role' => 'admin'
			]);
		User::create(
			[
				'name' => 'Lưu Chính',
				'email' => 'luuquangchinh@gmail.com',
				'password' => Hash::make('Sky@16071964#'),
				'avatar' => 'assets/images/avatars/C.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Hải Bình',
				'email' => 'buihaibinh@gmail.com',
				'password' => Hash::make('Sky@13081969#'),
				'avatar' => 'assets/images/avatars/B.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Trần Tuân',
				'email' => 'tranvantuan@gmail.com',
				'password' => Hash::make('Sky@29081980#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Tiến Thịnh',
				'email' => 'thantienthinh@gmail.com',
				'password' => Hash::make('Sky@10091984#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Mạnh Huy',
				'email' => 'hamanhhuy@gmail.com',
				'password' => Hash::make('Sky@22091988#'),
				'avatar' => 'assets/images/avatars/H.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Minh Tấn',
				'email' => 'chauminhtan@gmail.com',
				'password' => Hash::make('Sky@16101990#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Văn Hùng',
				'email' => 'phamvanhung@gmail.com',
				'password' => Hash::make('Sky@30111965#'),
				'avatar' => 'assets/images/avatars/H.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Ngọc Thắng',
				'email' => 'dangngocthang@gmail.com',
				'password' => Hash::make('Sky@12031989#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Mai Hiền',
				'email' => 'maithihien@gmail.com',
				'password' => Hash::make('Sky@20121973#'),
				'avatar' => 'assets/images/avatars/H.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Phùng Long',
				'email' => 'phungvietlong@gmail.com',
				'password' => Hash::make('Sky@02021971#'),
				'avatar' => 'assets/images/avatars/L.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Phương Hoa',
				'email' => 'vuthiphuonghoa@gmail.com',
				'password' => Hash::make('Sky@17021981#'),
				'avatar' => 'assets/images/avatars/H.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Hải Sơn',
				'email' => 'dohaison@gmail.com',
				'password' => Hash::make('Sky@03031965#'),
				'avatar' => 'assets/images/avatars/S.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Văn Thắng',
				'email' => 'nguyenvanthang@gmail.com',
				'password' => Hash::make('Sky@10031965#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Huỳnh Quảng',
				'email' => 'hnquang143@gmail.com',
				'password' => Hash::make('trieugiang1510'),
				'avatar' => 'assets/images/avatars/Q.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Việt Hùng',
				'email' => 'phamviethung@gmail.com',
				'password' => Hash::make('Sky@17031975#'),
				'avatar' => 'assets/images/avatars/H.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Hùng Sơn',
				'email' => 'dinhhungson@gmail.com',
				'password' => Hash::make('Sky@13051970#'),
				'avatar' => 'assets/images/avatars/S.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Đình Tấn',
				'email' => 'nguyendinhtan@gmail.com',
				'password' => Hash::make('Sky@30051988#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Vũ Tuấn',
				'email' => 'vuanhtuan@gmail.com',
				'password' => Hash::make('Sky@04071979#'),
				'avatar' => 'assets/images/avatars/T.jpg',
				'role' => 'manager_tmp'
			]);
		User::create(
			[
				'name' => 'Visitor',
				'email' => 'visitor@gmail.com',
				'password' => Hash::make('Sky@186834197#'),
				'avatar' => 'assets/images/avatars/V.jpg',
				'role' => 'visitor'
			]);

	}
}