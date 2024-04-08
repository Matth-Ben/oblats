<?php

 /**
   * Performs reSmushit Image Optimization through CLI
   *
   * ## OPTIONS
   *
   * <cmd>
   * : can be 'optimize' to run the optimization (for a single image or bulk)
   * : can be 'set-quality <quality>' to define a new quality factor
   * : can be 'help' to display global help
   * : can be 'version' to retrieve plugin version
   *
   *
   * ## EXAMPLES
   *
   *     wp resmushit optimize
   *
   * @when after_wp_load
   * 
   * @package    Resmush.it
   * @subpackage Controller
   * @author     Charles Bourgeaux <contact@resmush.it>
   */

Class reSmushitWPCLI {
 	/**
    *
    * @subcommand help
    *
    **/
    function help() {
	WP_CLI::log('reSmush.it Image Optimizer Help ');
	WP_CLI::log('Usage:');
	WP_CLI::log('- `wp resmushit set-quality <quality_level>` : defines the image quality level (1-100)');
	WP_CLI::log('- `wp resmushit optimize` : optimize the whole media library by batches of ' . reSmushit::MAX_ATTACHMENTS_REQ);
	WP_CLI::log('- `wp resmushit optimize --attachment=<attachment_id>` : optimizes a single attachment.');
    }

    /**
    *
    * @subcommand version
    *
    **/
    function version() {
	WP_CLI::success('reSmush.it Image Optimizer ' . RESMUSHIT_VERSION);
    }

 	/**
    *
    * @subcommand set-quality 
    * @alias quality
    *
    **/
    function set_quality( $args ) {
    	if(!isset($args[0])) {
		WP_CLI::error( 'An image quality value is required for this command. (eg. `wp set-quality 82`).  Type `wp resmushit help` for more information.' );
    		return;
    	}
        if($args[0] > 0 && $args[0] <= 100) {
        	update_option( 'resmushit_qlty', (int)$args[0] );
		WP_CLI::success( "The image quality value is set to " . $args[0]);
        } else {
		WP_CLI::error( 'An incorrect image quality value was provided (e.g. `wp set-quality 82`)' );
        }
    }

    /**
    *
    * @subcommand optimize
    *
    **/
    function optimize( $args, $assoc_args ) {
    	if(isset($args[0])) {
		WP_CLI::error('Incorrect parameter. Type `wp resmushit help` for more information.');
    		return;
    	}

    	// If specific attachment has to be optimized.
    	if(!empty($assoc_args)) {
    		if(isset($assoc_args['attachment'])) {
    			if((int)$assoc_args['attachment'] != 0) {
    				if(!get_attached_file($assoc_args['attachment'])) {
					WP_CLI::error('The file was not found in the database.');
    					return;
    				}
    				WP_CLI::log('Optimizing attachment #' . (int)$assoc_args['attachment'] . '...');
    				update_option( 'resmushit_cron_lastaction', time() );
					switch(reSmushit::revert($assoc_args['attachment'])) {
						case 'success': 
							WP_CLI::success('1 image has been optimized.');
							break;
						case 'disabled':
							WP_CLI::warning('Optimization is disabled for this image.');
							break;
						case 'file_too_big':
							WP_CLI::error('The file is too large (over 5MB)');
							break;
						case 'file_not_found':
							WP_CLI::error('File not found on the disk.');
							break;
						case 'failed':
						default:
							WP_CLI::error('Unexpected error while executing the optimization.');
							break;
					}
					return;						
    			} else {
				WP_CLI::error('Incorrect value for the `attachment` parameter. Enter `wp resmushit help` for more information.');
    				return;
    			}
    		} else {
			WP_CLI::error('Incorrect parameter. Enter `wp resmushit help` for more information.');
    			return;
    		}
    	}

	WP_CLI::log('Gathering unoptimized images...');
		$unoptimized_pictures = json_decode(reSmushit::getNonOptimizedPictures(TRUE));
		$count_unoptimized_pictures = count($unoptimized_pictures->nonoptimized);

		if($count_unoptimized_pictures > 0) {
			WP_CLI::log('Found ' . $count_unoptimized_pictures . ' images');
			$progress = \WP_CLI\Utils\make_progress_bar( 'Optimized images', count($unoptimized_pictures->nonoptimized) );

			foreach($unoptimized_pictures->nonoptimized as $el) {
				update_option( 'resmushit_cron_lastaction', time() );
				reSmushit::revert($el->ID);
				$progress->tick();
			}
			$progress->finish();
			WP_CLI::success($count_unoptimized_pictures . ' images have been optimized.');
		} else {
			WP_CLI::success('All images have already been optimized.');
		}
    }
}
