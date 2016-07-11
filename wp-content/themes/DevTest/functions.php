<?php 
function jquery152_scripts_with_jquery() 
{ 

// Register the script like this for a theme: 
wp_register_script( 'custom-script1', get_template_directory_uri() . '/js/jquery-1.5.2.min.js', array( 'jquery' ) ); 

// For either a plugin or a theme, you can then enqueue the script: 
wp_enqueue_script( 'custom-script1' ); 
} 

add_action( 'wp_enqueue_scripts', 'jquery152_scripts_with_jquery' ); 

function wpbootstrap_scripts_with_jquery() 
{ 

// Register the script like this for a theme: 
wp_register_script( 'custom-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) ); 

// For either a plugin or a theme, you can then enqueue the script: 
wp_enqueue_script( 'custom-script' ); 
} 

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' ); 

//���������� ������� Ajax ������� 'my_action_callback'
add_action('wp_ajax_my_action', 'my_action_callback'); //����������� ������ ��� �������������� �������������,
add_action('wp_ajax_nopriv_my_action', 'my_action_callback'); //����������� ��� ���������������� �������������
function my_action_callback()
{ 
	 //�������� �������� ���������
	 $categogyName = $_POST['countryName'];
	 global $post;
	$args = array('category_name' => $categogyName );
	//�������� ������ (�����, ��������, ��������) �� ���� ������ �� ��������� ��������. 
	$myposts = get_posts( $args );
	$category_id = get_cat_ID($categogyName);
	
	 //*********************************************
	 
	  $htmlBlock = '<div class="row">
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-3">
										<h2>'.$categogyName.'</h2>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12"> <h4>'.wp_get_post_tags().'</h4></div>
										</div>
										<div class="row">';
											foreach( $myposts as $post ){ setup_postdata($post);
											$htmlBlock .= '<div id="one" class="col-md-4">
												<h4>'.get_the_title().'</h4>';
												$htmlBlock .= '<p>';
												$htmlBlock .= get_the_content();//the_content();
												$htmlBlock .= '</p>';
											$htmlBlock .= '</div>';
											}
										$htmlBlock .= '</div>		
									</div>
								</div>		
							</div>
							<div class="col-md-2"></div>
						</div>';
	 //*********************************************
	 echo $htmlBlock;
	 //echo $categogyName;
	wp_die(); // ����� ����� ��� ����, ����� � ������ �� ���� ������ �������, ������ �� ��� ���������� �������
}
 //������� �������� ������ ���� � ������� �� WordPress
 function remove_menus(){
  //remove_menu_page( 'index.php' );                  //�������
  //remove_menu_page( 'edit.php' );                   //������
  remove_menu_page( 'upload.php' );                 //����������
  remove_menu_page( 'edit.php?post_type=page' );    //��������
  remove_menu_page( 'edit-comments.php' );          //�����������
  //remove_menu_page( 'themes.php' );                 //������� ���
  remove_menu_page( 'plugins.php' );                //�������
  //remove_menu_page( 'users.php' );                  //������������
  //remove_menu_page( 'tools.php' );                  //�����������
  //remove_menu_page( 'options-general.php' );        //���������
}
add_action( 'admin_menu', 'remove_menus' );


