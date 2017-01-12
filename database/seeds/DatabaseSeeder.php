<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PostsSeeder');
	}

}


class PostsSeeder extends Seeder {

	
	public function run()
	{
		DB::table('Posts')->delete();
		Post::create([
			'title' => 'First Post',
			'slug' => 'firs-post',
			'excerpt' => '<b>First Post body</b>',
			'content' => '<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</b>',
			'published' => true,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
			]);


		Post::create([
			'title' => 'Two Post',
			'slug' => 'two-post',
			'excerpt' => '<b>First Post body</b>',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
			]);

		Post::create([
			'title' => 'Three Post',
			'slug' => 'three-post',
			'excerpt' => '<b>First Post body</b>',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
			'published' => false,
			'published_at' => DB::raw('CURRENT_TIMESTAMP'),
			]);

	}

}
