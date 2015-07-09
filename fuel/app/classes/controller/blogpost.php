<?php
class Controller_Blogpost extends Controller_Template
{

	public function action_index()
	{
		$data['blogposts'] = Model_Blogpost::find('all');
		$this->template->title = "Blogposts";
		$this->template->content = View::forge('blogpost/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('blogpost');

		if ( ! $data['blogpost'] = Model_Blogpost::find($id))
		{
			Session::set_flash('error', 'Could not find blogpost #'.$id);
			Response::redirect('blogpost');
		}

		$this->template->title = "Blogpost";
		$this->template->content = View::forge('blogpost/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Blogpost::validate('create');

			if ($val->run())
			{
				$blogpost = Model_Blogpost::forge(array(
					'title' => Input::post('title'),
					'author' => Input::post('author'),
					'content' => Input::post('content'),
				));

				if ($blogpost and $blogpost->save())
				{
					Session::set_flash('success', 'Added blogpost #'.$blogpost->id.'.');

					Response::redirect('blogpost');
				}

				else
				{
					Session::set_flash('error', 'Could not save blogpost.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Blogposts";
		$this->template->content = View::forge('blogpost/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('blogpost');

		if ( ! $blogpost = Model_Blogpost::find($id))
		{
			Session::set_flash('error', 'Could not find blogpost #'.$id);
			Response::redirect('blogpost');
		}

		$val = Model_Blogpost::validate('edit');

		if ($val->run())
		{
			$blogpost->title = Input::post('title');
			$blogpost->author = Input::post('author');
			$blogpost->content = Input::post('content');

			if ($blogpost->save())
			{
				Session::set_flash('success', 'Updated blogpost #' . $id);

				Response::redirect('blogpost');
			}

			else
			{
				Session::set_flash('error', 'Could not update blogpost #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$blogpost->title = $val->validated('title');
				$blogpost->author = $val->validated('author');
				$blogpost->content = $val->validated('content');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('blogpost', $blogpost, false);
		}

		$this->template->title = "Blogposts";
		$this->template->content = View::forge('blogpost/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('blogpost');

		if ($blogpost = Model_Blogpost::find($id))
		{
			$blogpost->delete();

			Session::set_flash('success', 'Deleted blogpost #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete blogpost #'.$id);
		}

		Response::redirect('blogpost');

	}

}
