<?php

use App\Packages\SylynderDb\Db;
use Base\Controllers\WebController;

class App extends WebController 
{

	// public function index()
	// {

	// 	return view('welcome');
	// }

	public function index()
	{

		use_model('UserModel', 'users');

		// dd($this->users->toMySQL('users.json', ROOTPATH . 'user.sql'));
		dd($this->users->toXML(ROOTPATH . 'calcs.xml'));
		// dd($this->users->getFileSize());
		// dd($this->users->insert([
		// 	'id' => 1,
		// 	'framework' => 'Symfony',
		// 	'language' => 'PHP',
		// 	'author' => 'Fabio Potencier',
		// 	'year_released' => 2007
		// ]));
		// $this->users->from('bags');
		// dd($this->users->where(['framework' => 'Webby'])->from('users')->get());
		// dd($this->users->where(['id' => 1])->where(['framework' => 'Symfony'])->get());
		// dd($this->users->where(['id' => 5, 'framework' => 'Symfony'], 'AND')->get());
		// dd($this->users->where(['id' => 5, 'framework' => 'Symfony', 'framework' => 'Laravel'])->get());
		// ###dd($this->users->where(['id' => 5, 'framework' => Db::regex("/Sym/")])->get());
		//dd($this->users->where(['uid' => 5, 'framework' => $this->site->search("/Sym/")])->get());
        
		// dd($this->users->orderBy('id', Db::DESC)->get());

		// dd($this->users->select('*')->where(['framework' => 'Webby'])->from('users')->get());//->where(['framework' => 'Webby'])->get());
		// dd($this->users->update(['year_released' => 2011])->where(['id' => 3])->execute());
		// dd($this->users->delete()->where(['id' => 5])->execute());
		
		dd('kill');

		$this->db = new Db('books');

		// dd($this->db->getFileSize());
		// dd($this->db->createDatabase('school'));
		// dd($this->db->insert('users', [
		// 	'id' => 3,
		// 	'framework' => 'Symfony',
		// 	'language' => 'PHP',
		// 	'author' => 'Fabio Potencier',
		// 	'year_released' => 2005
		// ]));
		// dd('off');
		// $users = $this->db->select('*')->from('users')->get();
		// $users = arrayz($users)->select('*')->get();
		
		// dd($this->db->select('*')->from('users')->where(['id' => 5, 'framework' => Db::regex("/Sym/")])->get());
		
		// $this->db->update('users', ['year_released' => 2011, 'author' => 'Taylor Otwell'])->where(['id' => 3])->execute();
		// $updated = $this->db->update('users', ['framework' => "Laravel"])->where(['id' => 1])->execute();

		// $updated = $this->db->update('users', ['id' => 5])->where(['framework' => 'Symfony'])->execute();
		// $deleted = $this->db->delete('users')->where(['id' => 5])->execute();
		// dd('here', $updated);
		// dd('here', $deleted);
		// dd($users);
		// redirect('');
	}

	/**
	 * This is a default method to
	 * send intruders outside of 
	 * the application
	 * 
	 * You can read the documentation
	 * to find out more
	 *
	 * @param string $to
	 * @return void
	 */
	public function outside($to = '')
	{
		$this->toOutside($to);
	}

	public function error404()
	{
		return view('errors.app.error404', $this->data);
	}

}
