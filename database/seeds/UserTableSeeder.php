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
				'password' => Hash::make('Sky@04021990#')
			]);
		User::create(
			[
				'name' => 'Lưu Chính',
				'email' => 'luuquangchinh@gmail.com',
				'password' => Hash::make('Sky@16071964#')
			]);
		User::create(
			[
				'name' => 'Hải Bình',
				'email' => 'buihaibinh@gmail.com',
				'password' => Hash::make('Sky@13081969#')
			]);
		User::create(
			[
				'name' => 'Trần Tuân',
				'email' => 'tranvantuan@gmail.com',
				'password' => Hash::make('Sky@29081980#')
			]);
		User::create(
			[
				'name' => 'Tiến Thịnh',
				'email' => 'thantienthinh@gmail.com',
				'password' => Hash::make('Sky@10091984#')
			]);
		User::create(
			[
				'name' => 'Mạnh Huy',
				'email' => 'hamanhhuy@gmail.com',
				'password' => Hash::make('Sky@22091988#')
			]);
		User::create(
			[
				'name' => 'Minh Tấn',
				'email' => 'chauminhtan@gmail.com',
				'password' => Hash::make('Sky@16101990#')
			]);
		User::create(
			[
				'name' => 'Văn Hùng',
				'email' => 'phamvanhung@gmail.com',
				'password' => Hash::make('Sky@30111965#')
			]);
		User::create(
			[
				'name' => 'Ngọc Thắng',
				'email' => 'dangngocthang@gmail.com',
				'password' => Hash::make('Sky@12031989#')
			]);
		User::create(
			[
				'name' => 'Mai Hiền',
				'email' => 'maithihien@gmail.com',
				'password' => Hash::make('Sky@20121973#')
			]);
		User::create(
			[
				'name' => 'Phùng Long',
				'email' => 'phungvietlong@gmail.com',
				'password' => Hash::make('Sky@02021971#')
			]);
		User::create(
			[
				'name' => 'Phương Hoa',
				'email' => 'vuthiphuonghoa@gmail.com',
				'password' => Hash::make('Sky@17021981#')
			]);
		User::create(
			[
				'name' => 'Hải Sơn',
				'email' => 'dohaison@gmail.com',
				'password' => Hash::make('Sky@03031965#')
			]);
		User::create(
			[
				'name' => 'Văn Thắng',
				'email' => 'nguyenvanthang@gmail.com',
				'password' => Hash::make('Sky@10031965#')
			]);
		User::create(
			[
				'name' => 'Huỳnh Quảng',
				'email' => 'huynhngocquang@gmail.com',
				'password' => Hash::make('Sky@14031981#')
			]);
		User::create(
			[
				'name' => 'Việt Hùng',
				'email' => 'phamviethung@gmail.com',
				'password' => Hash::make('Sky@17031975#')
			]);
		User::create(
			[
				'name' => 'Hùng Sơn',
				'email' => 'dinhhungson@gmail.com',
				'password' => Hash::make('Sky@13051970#')
			]);
		User::create(
			[
				'name' => 'Đình Tấn',
				'email' => 'nguyendinhtan@gmail.com',
				'password' => Hash::make('Sky@30051988#')
			]);
		User::create(
			[
				'name' => 'Vũ Tuấn',
				'email' => 'vuanhtuan@gmail.com',
				'password' => Hash::make('Sky@04071979#')
			]);
		User::create(
			[
				'name' => 'Guest',
				'email' => 'guest@gmail.com',
				'password' => Hash::make('Sky@186834197#')
			]);

	}
}