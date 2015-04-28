<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Professor;
use App\Student;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('UserTableSeeder');
		$this->call('ProfessorTableSeeder');
		$this->call('StudentTableSeeder');
	}
}

class ProfessorTableSeeder extends Seeder {

	public function run()
	{
		Professor::create( [
			'first_name' => 'Florence',
			'last_name' => 'Langa',
			'user_id' => DB::table('users')->select('id')->where('name', '=', 'flanga')->first()->id,
				] );
		Professor::create( [
			'first_name' => 'Gérald',
			'last_name' => 'Janniaux',
			'user_id' => DB::table('users')->select('id')->where('name', '=', 'gjanniaux')->first()->id,
				] );
		Professor::create( [
			'first_name' => 'Vincent',
			'last_name' => 'Verdon',
			'user_id' => DB::table('users')->select('id')->where('name', '=', 'vverdon')->first()->id,
				] );
		Professor::create( [
			'first_name' => 'Frédéric',
			'last_name' => 'Dejoie',
			'user_id' => DB::table('users')->select('id')->where('name', '=', 'fdejoie')->first()->id,
				] );
		Professor::create( [
			'first_name' => 'Olivier',
			'last_name' => 'Jodet',
			'user_id' => DB::table('users')->select('id')->where('name', '=', 'ojodet')->first()->id,
				] );
	}	
}

class StudentTableSeeder extends Seeder {

	public function run()
	{
		Student::create( [
			'first_name' => 'Thibault',
			'last_name' => 'Carcaillon',
			'user_id' => '6',
				] );
	}
}
class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create( [
			'name' => 'flanga',
			'email' => 'florence.langa@ac-poitiers.fr',
			'password' => Hash::make( 'e4Tol2Zx' ),
		] );
		User::create( [
			'name' => 'gjanniaux',
			'email' => 'gerald.janniaux@ac-poitiers.fr',
			'password' => Hash::make( 'Gr5Alm2P' ),
				] );
		User::create( [
			'name' => 'vverdon',
			'email' => 'vincent.verdon@ac-poitiers.fr',
			'password' => Hash::make( 'l8fTC4sM' ),
				] );
		User::create( [
			'name' => 'fdejoie',
			'email' => 'frederic.dejoie@ac-poitiers.fr',
			'password' => Hash::make( 'Pm5Zdj7k' )
				] );
		User::create( [
			'name' => 'ojodet',
			'email' => 'olivier.jodet@ac-poitiers.fr',
			'password' => Hash::make( 'kM5zaR4d' )
				] );
		User::create( [
			'name' => 'tcarcaillon' ,
			'email' => 'thibault.carcaillon1@gmail.com' ,
			'password' => Hash::make( 'h6CeM3za' ) ,
		] );
	}
}