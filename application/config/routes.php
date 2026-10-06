<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

// Company Routes
$route['about-us'] = 'about/index';
$route['contact-us'] = 'contacts/index';
$route['faqs'] = 'about/faqs';
$route['photo-gallery'] = "gallery/photo_gallery";
$route['video-gallery'] = "gallery/video_gallery";
$route['testimonials'] = 'about/testimonials';
$route['reviews'] = 'reviews/index';
$route['about/submit_review'] = 'reviews/submit';
$route['blog/view'] = 'blog/view';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/([a-z0-9-]+)'] = 'blog/read/$1';
$route['blog'] = 'blog/view';
$route['privacy-policy'] = 'about/privacy';
$route['terms-and-conditions'] = 'about/terms';

// Product Catalogue Routes
$route['products'] = 'products/index';
$route['product-catalogue'] = 'products/index';

// Dedicated Function Routes for Each Product
$route['commercial-kitchen-equipment'] = 'products/commercial_kitchen';
$route['bakery-equipment'] = 'products/bakery';
$route['display-counter'] = 'products/display_counter';
$route['refrigeration-equipment'] = 'products/refrigeration';
$route['kitchen-ventilation-system'] = 'products/ventilation';
$route['washing-equipment'] = 'products/washing';
$route['lpg-gas-pipeline-installation'] = 'products/lpg_gas';

$route['products/commercial-kitchen-equipment'] = 'products/commercial_kitchen';
$route['products/bakery-equipment'] = 'products/bakery';
$route['products/display-counter'] = 'products/display_counter';
$route['products/refrigeration-equipment'] = 'products/refrigeration';
$route['products/kitchen-ventilation-system'] = 'products/ventilation';
$route['products/washing-equipment'] = 'products/washing';
$route['products/lpg-gas-pipeline-installation'] = 'products/lpg_gas';
$route['products/(:any)'] = 'products/detail/$1';


// City Services Routes
$route["home-shifting-in-(:any)"] = "city_services/home_shifting/$1";
$route["office-shifting-in-(:any)"] = "city_services/office_shifting/$1";
$route["car-transport-in-(:any)"] = "city_services/car_transport/$1";
$route["bike-transport-in-(:any)"] = "city_services/bike_transport/$1";

// Services Routes
$route['services'] = 'services/index';
$route['our-services'] = 'services/index';

// Dedicated Function Routes for Each Service
$route['services/commercial-kitchen-equipment'] = 'services/commercial_kitchen';
$route['services/bakery-food-service-equipment'] = 'services/bakery';
$route['services/refrigeration-ventilation-systems'] = 'services/ventilation';
$route['services/lpg-gas-pipeline-installation'] = 'services/lpg_gas';
$route['services/custom-fabrication-installation'] = 'services/fabrication';

// Clean Aliases & Detail Dispatch
$route['services/commercial-kitchen'] = 'services/commercial_kitchen';
$route['services/bakery'] = 'services/bakery';
$route['services/ventilation'] = 'services/ventilation';
$route['services/lpg-gas'] = 'services/lpg_gas';
$route['services/custom-fabrication'] = 'services/fabrication';
$route['services/(:any)'] = 'services/detail/$1';

// Legacy/Compatibility Routes
$route["storage-services"] = "services/storage";
$route["car-transportation-service"] = "services/car";
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";

// Branch/City Routes
$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["bihar"] = "packers_movers/state_services/bihar";
$route["delhi"] = "packers_movers/state_services/delhi";
$route["west-bengal"] = "packers_movers/state_services/west-bengal";
$route["gujarat"] = "packers_movers/state_services/gujarat";
$route["punjab"] = "packers_movers/state_services/punjab";
$route["maharashtra"] = "packers_movers/state_services/maharashtra";
$route["haryana"] = "packers_movers/state_services/haryana";
$route["rajasthan"] = "packers_movers/state_services/rajasthan";
$route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
$route["jharkhand"] = "packers_movers/state_services/jharkhand";
$route["assam"] = "packers_movers/state_services/assam";
$route["karnataka"] = "packers_movers/state_services/karnataka";
$route["bangalore"] = "packers_movers/state_services/bangalore";
$route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";
$route["(:any).htm"] = "home/error";
$route['translate_uri_dashes'] = FALSE;