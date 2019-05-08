<?php
/**
 * Presets class
 * generates some presets for different portions of the site.
 */
 
class presets {
  
  var $active = '';

  /**
   * generates the items inside the top navbar
   */
  function GenerateNavbar() {
      global $set, $user;
      $var = array();
      $var[] = array("item" ,
                      array("href" => $set->url,
                            "name" => "Home",
                            "class" => $this->isActive("home")),
                      "id" => "home");
      $var[] = array("item" ,
                      array("href" => $set->url."/features.php",
                            "name" => "Features",
                            "class" => $this->isActive("features")),
							"id" => "features");		
      $var[] = array("item" ,
                      array("href" => $set->url."/pricing.php",
                            "name" => "Pricing",
                            "class" => $this->isActive("pricing")),
							"id" => "pricing");							  					  
      $var[] = array("dropdown",
                      array(  0 => array("href" => "https://xenohost.co.uk/cpanel",
                                       "name" => "Website cPanel",
                                       "class" => 0),
                              1 => array("href" => "https://xenohost.co.uk/webmail",
                                         "name" => "Webmail",
                                         "class" => 0),
                              2 => array("href" => "https://xenohost.co.uk/billing",
                                         "name" => "Billing",
                                         "class" => 0),                       
                              3 => array("href" => "https://xenohost.co.uk/multicraft",
                                         "name" => "XenoPanel{Minecraft}",
                                         "class" => 0),
                              4 => array("href" => "https://xenohost.co.uk/tcadmin",
                                         "name" => "TCAdmin",
                                         "class" => 0),    						  
						  
						  ),
                      "class" => 0,
                      "style" => 0,
                      "name" => "Control Panels",
                      "id" => "cpanels"
					);    				
      $var[] = array("item",
                      array("href" => $set->url."/contact.php",
                            "name" => "Contact",
                            "class" => $this->isActive("contact")),
                      "id" => "contact");

      if($user->group->type == 3) // we make it visible for admins only
      $var[] = array("item",
                      array("href" => $set->url."/admin",
                            "name" => "Admin Panel",
                            "class" => $this->isActive("adminpanel")),
                      "id" => "adminpanel");
					  
      $var[] = array("item",
                      array("href" => $set->url."/users_list.php",
                            "name" => "User List",
                            "class" => $this->isActive("userslist")),
                      "id" => "userslist");

      $var[] = array("dropdown",
                      array(  array("href" => $set->url."/profile.php?u=".$user->data->userid,
                                       "name" => "<i class=\"icon-user\"></i> My Profile",
                                       "class" => 0),
                              array("href" => $set->url."/user.php",
                                       "name" => "<i class=\"icon-cog\"></i> Account settings",
                                       "class" => 0),
                              array("href" => $set->url."/privacy.php",
                                       "name" => "<i class=\"icon-lock\"></i> Privacy settings",
                                       "class" => 0),

                              array("href" => $set->url."/logout.php",
                                         "name" => "LogOut",
                                         "class" => 0),
                          ),
                      "class" => 0,
                      "name" => $user->filter->username,
                      "style" => 0,
                      "id" => "user");



          

      return $var;
  }

  function setActive($id) {
    $this->active = $id;
  }

  function isActive($id) {
    if($id == $this->active)
      return "active";
    return 0;
  }

}
