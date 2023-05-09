<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Admin/index');
	}
	
	public function draft_memoire(){
		$this->load->helper('url');
		$this->load->view('Admin/draft_memoire');
	}

	public function de_temps(){
		$this->load->helper('url');
		$this->load->view('Admin/de_temps');
	}

	public function app_calendar(){
		$this->load->helper('url');
		$this->load->view('Admin/app_calendar');
	}

	public function app_chat(){
		$this->load->helper('url');
		$this->load->view('Admin/app_chat');
	}

	public function authentication_login1(){
		$this->load->helper('url');
		$this->load->view('Admin/authentication_login1');
	}

	public function authentication_register1(){
		$this->load->helper('url');
		$this->load->view('Admin/authentication_register1');
	}

	public function bibliotheque(){
		$this->load->helper('url');
		$this->load->view('Admin/bibliotheque');
	}

	public function chart_chart_js(){
		$this->load->helper('url');
		$this->load->view('Admin/chart_chart_js');
	}

	public function chart_knob(){
		$this->load->helper('url');
		$this->load->view('Admin/chart_knob');
	}

	public function chart_morris(){
		$this->load->helper('url');
		$this->load->view('Admin/chart_morris');
	}

	public function cms(){
		$this->load->helper('url');
		$this->load->view('Admin/cms');
	}

	public function contact_entreprise(){
		$this->load->helper('url');
		$this->load->view('Admin/contact_entreprise');
	}

	public function depot_draft(){
		$this->load->helper('url');
		$this->load->view('Admin/depot_draft');
	}

	public function depot_memoire(){
		$this->load->helper('url');
		$this->load->view('Admin/depot_memoire');
	}

	public function evenements(){
		$this->load->helper('url');
		$this->load->view('Admin/evenements');
	}
	
	public function form_checkbox_radio(){
		$this->load->helper('url');
		$this->load->view('Admin/form_checkbox_radio');
	}
	
	public function form_input_grid(){
		$this->load->helper('url');
		$this->load->view('Admin/form_input_grid');
	}
		
	public function form_inputs(){
		$this->load->helper('url');
		$this->load->view('Admin/form_inputs');
	}
			
	public function home_time_table(){
		$this->load->helper('url');
		$this->load->view('Admin/home_time_table');
	}
				
	public function icon_fontawesome(){
		$this->load->helper('url');
		$this->load->view('Admin/icon_fontawesome');
	}
					
	public function icon_simple_lineicon(){
		$this->load->helper('url');
		$this->load->view('Admin/icon_simple_lineicon');
	}
						
	public function imprim_quitus(){
		$this->load->helper('url');
		$this->load->view('Admin/imprim_quitus');
	}
							
	public function library(){
		$this->load->helper('url');
		$this->load->view('Admin/library');
	}
							
	public function list_enterprise(){
		$this->load->helper('url');
		$this->load->view('Admin/list_enterprise');
	}
										
	public function notes_ue(){
		$this->load->helper('url');
		$this->load->view('Admin/notes_ue');
	}

	public function notes(){
		$this->load->helper('url');
		$this->load->view('Admin/notes');
	}

	public function schooling(){
		$this->load->helper('url');
		$this->load->view('Admin/schooling');
	}

	public function semaines(){
		$this->load->helper('url');
		$this->load->view('Admin/semaines');
	}

	public function stages_ac(){
		$this->load->helper('url');
		$this->load->view('Admin/stages_ac');
	}

	public function statut(){
		$this->load->helper('url');
		$this->load->view('Admin/statut');
	}

	public function table_basic(){
		$this->load->helper('url');
		$this->load->view('Admin/table_basic');
	}

	public function table_dark_basic(){
		$this->load->helper('url');
		$this->load->view('Admin/table_dark_basic');
	}

	public function table_datatable_basic(){
		$this->load->helper('url');
		$this->load->view('Admin/table_datatable_basic');
	}

	public function table_layout_coloured(){
		$this->load->helper('url');
		$this->load->view('Admin/table_layout_coloured');
	}

	public function table_sizing(){
		$this->load->helper('url');
		$this->load->view('Admin/table_sizing');
	}

	public function ticket_list(){
		$this->load->helper('url');
		$this->load->view('Admin/ticket_list');
	}

	public function time_table(){
		$this->load->helper('url');
		$this->load->view('Admin/time_table');
	}

	public function ui_bootstrap(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_bootstrap');
	}

	public function ui_breadcrumb(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_breadcrumb');
	}

	public function ui_buttons(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_buttons');
	}

	public function ui_cards(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_cards');
	}

	public function ui_carousel(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_carousel');
	}

	public function ui_grid(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_grid');
	}

	public function ui_list_media(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_list_media');
	}

	public function ui_modals(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_modals');
	}

	public function ui_notification(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_notification');
	}

	public function ui_popover(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_popover');
	}

	public function ui_progressbar(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_progressbar');
	}

	public function ui_scrollspy(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_scrollspy');
	}

	public function ui_spinner(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_spinner');
	}

	public function ui_tab(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_tab');
	}

	public function ui_toasts(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_toasts');
	}

	public function ui_tooltip_popover(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_tooltip_popover');
	}

	public function ui_typography(){
		$this->load->helper('url');
		$this->load->view('Admin/ui_typography');
	}

	public function weeks(){
		$this->load->helper('url');
		$this->load->view('Admin/weeks');
	}
}
