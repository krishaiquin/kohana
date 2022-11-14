<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Hello extends Controller_Template
{
	public $template = 'site';
	
    public function action_index()
    {
        $this->template->message = 'Welcome to Krisha\'s page!<br/> Sorry it is not pretty yet
		<br/>This is my first Controller';
    }
}