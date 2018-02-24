<?php

class Posts extends CI_Controller
{
    public function index(){
        //pagination
        $this->load->library('pagination');

        $config['base_url'] = base_url('posts');
        $config['total_rows'] = count($this->Posts_model->get_posts());
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a class="current">';
        $config['cur_tag_close'] = '</a></li>';

        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $config['display_pages'] = TRUE;
        $config['first_link'] = 'First';
        $config['next_link'] = 'Next &rarr;';
        $config['prev_link'] = '&larr; Previous';
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);

        $limit = $config['per_page'];
        $offset = $this->uri->segment(3);

        $data['pagination'] =  $this->pagination->create_links();

        $data['posts'] = $this->Posts_model->get_post($limit, $offset);
        $data['title'] = "Latest Posts";
        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug){
        $data['post'] = $this->Posts_model->get_posts($slug);
        if(empty($data['post'])){
            show_404();
        }
        $data['title'] = $data['post']->post_title;
        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
}
