<?php
/**
 * WP-WPRemote-API
 *
 * @package WP-WPRemote-API
 */
/*
* Plugin Name: WP WPRemote API
* Plugin URI: https://github.com/wp-api-libraries/wp-wpremote-api
* Description: Perform API requests to WP Remote in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-wpremote-api
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { 
	exit; 
}

/* Check if class exists. */
if ( ! class_exists( 'WpRemoteAPI' ) ) {
	
	/**
	 * WpRemoteAPI API Class.
	 */
	class WpRemoteAPI {
		
		/**
		 * API Key
		 *
		 * @var string
		 */
		static private $apikey;
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://wpremote.com/api/json/';
		
		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct( $apikey ) {
			
			static::$apikey = $apikey;
		}
		
		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {
			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-remote-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}
		
		/* Subscription. */
		
		/**
		 * get_subscription function.
		 * 
		 * @access public
		 * @return void
		 */
		public function get_subscription() {
			
		}
		
		/**
		 * delete_subscription function.
		 * 
		 * @access public
		 * @return void
		 */
		public function delete_subscription() {
			
		}
		
		/**
		 * update_subscription function.
		 * 
		 * @access public
		 * @param mixed $stripe_token
		 * @param mixed $coupon
		 * @return void
		 */
		public function update_subscription( $stripe_token, $coupon ) {
			
		}
		
		/* Webhooks. */
		
		/**
		 * get_webhook function.
		 * 
		 * @access public
		 * @return void
		 */
		public function get_webhook() {
			
		}
		
		/**
		 * update_webhook function.
		 * 
		 * @access public
		 * @return void
		 */
		public function update_webhook() {
			
		}
		
		/**
		 * delete_webhook function.
		 * 
		 * @access public
		 * @return void
		 */
		public function delete_webhook() {
			
		}
		
		
		/* Sites. */
		
		/**
		 * Get All Sites.
		 * 
		 * @access public
		 * @return void
		 */
		public function get_all_sites() {
			$request = $this->base_uri . 'site' );
			return $this->fetch( $request );
		}
		
		/**
		 * Add Site.
		 * 
		 * @access public
		 * @param mixed $domain Domain.
		 * @param mixed $nicename Nicename.
		 * @param string $group (default: '') Group.
		 * @return void
		 */
		public function add_site( $domain, $nicename, $group = '' ) {
			
		}
		
		/**
		 * Get Site Objects.
		 * 
		 * @access public
		 * @param mixed $site_id Site ID.
		 * @return void
		 */
		public function get_site( $site_id ) {
			
		}
		
		/**
		 * update_site function.
		 * 
		 * @access public
		 * @param mixed $domain
		 * @param mixed $nicename
		 * @param mixed $http_auth_username
		 * @param mixed $http_auth_password
		 * @param mixed $filesystem_method
		 * @param mixed $filesystem_hostname
		 * @param mixed $filesystem_username
		 * @param mixed $filesystem_password
		 * @return void
		 */
		public function update_site( $domain, $nicename, $http_auth_username, $http_auth_password, $filesystem_method, $filesystem_hostname, $filesystem_username, $filesystem_password ) {
			
		}
		
		/**
		 * Delete Site.
		 * 
		 * @access public
		 * @param mixed $site_id Site ID.
		 * @return void
		 */
		public function delete_site( $site_id ) {
			
		}
		
		/**
		 * get_site_group function.
		 * 
		 * @access public
		 * @param mixed $site_id
		 * @return void
		 */
		public function get_site_group( $site_id ) {
			
		}
		
		/**
		 * update_site_group function.
		 * 
		 * @access public
		 * @param mixed $site_id
		 * @param mixed $name
		 * @return void
		 */
		public function update_site_group( $site_id, $name ) {
			
		}
	}
}