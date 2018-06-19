<?php

class WordSpeed
{

    protected $actions = [];

    public function __construct()
    {
        add_action('admin_footer', array($this, 'add_wordspeed_html'));
        add_action('admin_enqueue_scripts', array($this, 'load_wordspeed_assets'));

        add_action('wp_ajax_nopriv_wordspeed_command', array($this, 'execute_command'));
        add_action('wp_ajax_wordspeed_command', array($this, 'execute_command'));
    }

    public function execute_command()
    {
        $command = $_POST['command'];
        $function = explode('@', $this->actions[$command][1]);
        call_user_func($function[0].'::'.$function[1], $this->actions[$command][2]);
        die();
    }

    public function add_wordspeed_html()
    {
        $this->template('views/search-bar-template.php');
    }

    public function load_wordspeed_assets()
    {
        wp_enqueue_style('wordspeed-css', plugin_dir_url( __FILE__ ) . 'styles/style.css', false, '1.0.0');
        wp_enqueue_script('fuse-js', 'https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.0.4/fuse.min.js', false, '1.0.0');
        wp_enqueue_script('wordspeed-js', plugin_dir_url( __FILE__ ) . 'scripts/main.js', false, '1.0.0');
        wp_localize_script('wordspeed-js', 'wordspeed', array(
    		'ajax_url' => admin_url('admin-ajax.php'),
            'commands' => $this->commands_json(),
    	));
    }

    public function commands_json()
    {
        $full_array = [];

        foreach($this->actions as $key => $value){
            $full_array[] = [
                    'title' => $key,
                    'desc' => $value[0],
             ];
        }

        return json_encode($full_array);
    }

    public function template($path)
    {
        require_once($path);
    }

    public function add_command($template, $desc, $function, $vars = false)
    {
        $this->actions[$template] = [$desc, $function];
        if($vars){
            array_push($this->actions[$template], $vars);
        }
    }

    public function debugging()
    {
        die(var_dump($this->actions));
    }

}
