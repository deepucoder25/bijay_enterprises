<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    private $services_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->init_services_data();
    }

    private function init_services_data()
    {
        $this->services_data = [
            'commercial-kitchen-equipment' => [
                'slug' => 'commercial-kitchen-equipment',
                'title' => 'Commercial Kitchen Equipment',
                'category' => 'Kitchen Planning & Turnkey Setup',
                'badge' => 'SS 304 Certified',
                'icon' => 'bi-fire',
                'icon_color' => 'text-danger',
                'step_number' => '01',
                'tagline' => 'Turnkey Commercial Kitchen Engineering, CAD Space Planning & Food-Grade Fabrication',
                'description' => 'From bare commercial floors to buzzing culinary powerhouses, Bijay Enterprises provides complete turnkey commercial kitchen setup for hotels, multi-cuisine restaurants, cloud kitchens, hospitals, and corporate canteens. We engineer intelligent workflow zoning, 2D/3D CAD layouts, heavy-duty SS 304 cooking ranges, exhaust balancing, and seamless utility connections compliant with strict HACCP and FSSAI sanitary standards.',
                'image' => 'assets/img/products/commercial_kitchen.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Comprehensive 2D & 3D CAD kitchen floor blueprints with ergonomic chef zoning',
                    'Heavy-duty Food Grade SS 304 non-magnetic commercial cooking ranges and tandoors',
                    'Sanitary workflow planning separating raw preparation, cooking, and warewash zones',
                    'Complete utility coordination: High-pressure gas piping, water supply, and drainage channels',
                    'On-site installation, gas leak calibration, chef orientation, and 24/7 dedicated AMC support'
                ],
                'scope_list' => [
                    ['title' => 'Initial Site Survey & Menu Engineering Analysis', 'desc' => 'We inspect floor dimensions, utility entries, ceiling heights, and peak meal capacity to calculate the exact machinery requirements.'],
                    ['title' => '2D/3D Architectural CAD Blueprint Planning', 'desc' => 'Optimized work triangle preventing kitchen traffic jams between preparation, cooking line, service pass, and dish return.'],
                    ['title' => 'SS 304 Custom Machinery Manufacturing', 'desc' => 'Precision laser cutting and TIG welding of commercial 2/3/4-burner ranges, Chinese wok stations, fryers, and tandoors.'],
                    ['title' => 'Turnkey On-Site Erection & Commissioning', 'desc' => 'Our field engineers position equipment, align exhaust canopies, test gas manifolds, and calibrate all burner pressures.'],
                    ['title' => 'Preventive Maintenance & Fast Spares Support', 'desc' => 'Dedicated service contracts, emergency breakdown visits, and genuine replacement spare parts directly from our factory.']
                ],
                'specs' => [
                    'Fabrication Material' => 'Certified Food Grade SS 304 (18/8 Chrome-Nickel Stainless Steel)',
                    'Applicable Venues' => 'Hotels, Fine-Dining Restaurants, Cloud Kitchens, Banquets, Canteens, Hospitals',
                    'Design Standards' => 'FSSAI Sanitation Compliant, HACCP Ergonomics, Fire Safety Standards',
                    'Execution Timeline' => '10 to 25 Working Days depending on floor area and equipment count',
                    'Warranty & Support' => '1 Year Comprehensive Machinery Warranty + Scheduled Preventive AMC'
                ]
            ],
            'bakery-food-service-equipment' => [
                'slug' => 'bakery-food-service-equipment',
                'title' => 'Bakery & Food Service Equipment',
                'category' => 'Bakery Plant Engineering',
                'badge' => 'Automated PID Controls',
                'icon' => 'bi-cake2-fill',
                'icon_color' => 'text-warning',
                'step_number' => '02',
                'tagline' => 'Turnkey Bakery Setup, Industrial Rotary Ovens, Dough Automation & Confectionery Plants',
                'description' => 'Bijay Enterprises designs and sets up high-volume industrial baking plants, artisan bakeries, patisseries, cafe chains, and commercial bread factories. We supply PID temperature-controlled rotary rack ovens, heavy spiral dough kneaders, planetary whipping mixers, temperature/humidity proofing chambers, and automated bread slicers engineered for continuous batch baking with uniform heat transfer.',
                'image' => 'assets/img/products/bakery_equipment.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Turnkey bakery plant design with recipe-specific thermal calculations',
                    'Industrial rotary rack ovens with Japanese diesel/gas burner systems or electric heating',
                    'Dual-speed spiral dough kneaders with stainless safety mesh and reverse bowl rotation',
                    'Precision planetary mixers with whisk, flat beater, and spiral dough hook attachments',
                    'Digital humidity-controlled proofing chambers ensuring optimal yeast fermentation'
                ],
                'scope_list' => [
                    ['title' => 'Production Capacity & Recipe Workload Mapping', 'desc' => 'Calculating batch hourly dough requirements for sandwich loaves, baguettes, buns, pastries, and cookies.'],
                    ['title' => 'Baking Zone Thermal & Ventilation Layout', 'desc' => 'Designing dedicated oven baking zones with thermal heat extraction hoods to keep the workroom comfortable.'],
                    ['title' => 'Dough Processing Line Automation', 'desc' => 'Integrating flour sifters, heavy spiral mixers, dough sheeters, divider-rounders, and proofing chambers.'],
                    ['title' => 'Oven Calibration & Heat Distribution Testing', 'desc' => 'Thermal pyrometer validation ensuring even 360-degree crust browning across all rack baking trays.'],
                    ['title' => 'Master Baker Operational Training & AMC', 'desc' => 'Detailed staff operation guidelines, digital timer programming, and scheduled lubrication checkups.']
                ],
                'specs' => [
                    'Oven Capacities' => '8-Tray, 16-Tray, 32-Tray, 64-Tray Industrial Rotary Racks & Deck Ovens',
                    'Mixer Capacities' => '20L, 40L, 60L Planetary Mixers; 25kg, 50kg, 100kg Spiral Kneaders',
                    'Temperature Range' => '50°C to 300°C Digital PID Microprocessor Control',
                    'Applicable Facilities' => 'Wholesale Bread Plants, Luxury Pastry Shops, Pizza Bakeries, Rusk Factories',
                    'Service Warranty' => '1 Year Comprehensive Warranty with Fast Mechanical Spares Replacement'
                ]
            ],
            'refrigeration-ventilation-systems' => [
                'slug' => 'refrigeration-ventilation-systems',
                'title' => 'Refrigeration & Ventilation Systems',
                'category' => 'HVAC, Cold Chain & Air Engineering',
                'badge' => 'High CFM Airflow',
                'icon' => 'bi-wind',
                'icon_color' => 'text-info',
                'step_number' => '03',
                'tagline' => 'High-CFM Kitchen Exhaust Hoods, Stainless Ducting & Commercial Cold Chain Systems',
                'description' => 'Clean air and precision temperature control are vital for kitchen productivity and hygiene. Bijay Enterprises manufactures commercial SS 304 exhaust hoods, grease baffle filters, heavy GI/SS ducting networks, and high-velocity SISW/DIDW centrifugal blowers. Simultaneously, we engineer tropicalized commercial sub-zero walk-in chillers, upright refrigerators, and undercounter prep tables built for heavy 43°C Indian ambient temperatures.',
                'image' => 'assets/img/products/ventilation_system.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Engineered CFM airflow balancing removing 98% of airborne grease, soot, and excess kitchen heat',
                    'Stainless steel removable baffle filters with continuous perimeter grease collection troughs',
                    'Heavy-gauge galvanized iron (GI) and SS 304 welded exhaust ducting conforming to fire safety codes',
                    'Tropicalized commercial compressors with eco-friendly R404a/R134a refrigerants and digital thermostats',
                    'Sub-zero walk-in cold rooms and upright display chillers with heated anti-fog vacuum glass'
                ],
                'scope_list' => [
                    ['title' => 'CFM Aerodynamic Exhaust Load Calculations', 'desc' => 'Accurate volumetric calculations ensuring adequate air capture velocity across woks, fryers, and tandoors.'],
                    ['title' => 'Custom SS 304 Hood Fabrication', 'desc' => 'Manufactured with seamless welded corners, condensation drip gutters, and heat-resistant vapor-proof LED lights.'],
                    ['title' => 'Low-Noise Centrifugal Blower Installation', 'desc' => 'Dynamically balanced forward/backward curved centrifugal blowers with anti-vibration spring dampers.'],
                    ['title' => 'Commercial Cold Room & Chiller Setup', 'desc' => 'High-density 100mm PUF panel insulated walk-in chillers and upright reach-in commercial refrigerators.'],
                    ['title' => 'Routine Duct Degreasing & Refrigerant AMC', 'desc' => 'Preventive duct inspection, motor belt tension adjustments, filter cleaning, and compressor coil care.']
                ],
                'specs' => [
                    'Exhaust Hood Material' => 'Food Grade SS 304 (18 Gauge / 1.2 mm Hairline Finish)',
                    'Filter Design' => 'V-Bank SS Baffle Filters with High Grease Extraction Efficiency',
                    'Blower Types' => 'SISW / DIDW Centrifugal Blowers with IP55 Flame-Proof TEFC Motors',
                    'Chiller Temperature' => 'Chillers: +2°C to +8°C | Deep Freezers: -18°C to -22°C (Digital Microprocessor)',
                    'Refrigeration Compressors' => 'Emerson Copeland / Tecumseh High-Ambient Tropicalized Compressors'
                ]
            ],
            'lpg-gas-pipeline-installation' => [
                'slug' => 'lpg-gas-pipeline-installation',
                'title' => 'L.P.G. Gas Pipeline Installation',
                'category' => 'Fuel & Safety Engineering',
                'badge' => 'PESO / CCOE Standards',
                'icon' => 'bi-shield-lock-fill',
                'icon_color' => 'text-danger',
                'step_number' => '04',
                'tagline' => 'Certified Commercial LPG Manifold Banks, Seamless Schedule Piping & Auto-Leak Protection',
                'description' => 'Gas safety in high-heat commercial kitchens demands flawless engineering. Bijay Enterprises delivers turnkey commercial LPG pipeline installations including multi-cylinder LOT/VOT manifold headers, Class C seamless steel schedule pipes, two-stage pressure regulator stations, automatic gas leak detectors, and emergency solenoid shut-off systems conforming to strict PESO, CCOE, and Fire Department NOC guidelines.',
                'image' => 'assets/img/products/gas_pipeline.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Dual-arm commercial cylinder manifold headers (VOT/LOT) allowing uninterrupted cylinder swaps',
                    'Forged Class C seamless carbon steel pipes conforming to IS:1239 / ASTM A106 high-pressure codes',
                    'Two-stage pressure reduction: 1st stage reduces cylinder pressure; 2nd stage stabilizes appliance line',
                    'Hydrocarbon sensor network connected to automatic solenoid shutoff valves tripping in 0.5 seconds',
                    'Hydrostatic pressure testing at 25 kg/cm² followed by pneumatic leak audits and safety certificates'
                ],
                'scope_list' => [
                    ['title' => 'Kitchen Gas Consumption & Peak Flow Sizing', 'desc' => 'Calculating total BTU/kW requirements of all burners, ovens, and tandoors to size manifold headers.'],
                    ['title' => 'PESO Compliant Cylinder Storage Yard Design', 'desc' => 'Building well-ventilated external cylinder manifold yards with safety blast walls and wire cages.'],
                    ['title' => 'High-Pressure Schedule Piping Welding', 'desc' => 'Certified argon TIG socket weld and forged 3000 PSI high-pressure fittings with anti-corrosive primer coating.'],
                    ['title' => 'Automatic Safety Interlock Commissioning', 'desc' => 'Wiring gas leak sensors with audible sirens, flashing strobes, and emergency manual push-button valves.'],
                    ['title' => 'Pressure Hydro-Testing & Fire NOC Audit', 'desc' => 'Complete documented testing report ensuring total safety before gas is turned on in the kitchen.']
                ],
                'specs' => [
                    'Piping Standard' => 'Heavy "C" Class Seamless Carbon Steel Pipe (IS:1239 Part 1 / ASTM A106)',
                    'Fittings Standard' => 'Forged A105 / 3000 PSI High-Pressure Socket Weld & Threaded Unions',
                    'Regulator Stages' => 'Primary High-Pressure Regulator + Secondary Adjustable Low-Pressure Burner Regulators',
                    'Safety Shut-off' => 'Flame-Proof Brass Solenoid Valve with Manual Emergency Reset Push-Button',
                    'Testing Pressure' => '25 kg/cm² Hydrostatic Pressure Audit & Pneumatic Soap Leak Certification'
                ]
            ],
            'custom-fabrication-installation' => [
                'slug' => 'custom-fabrication-installation',
                'title' => 'Custom Fabrication & Installation',
                'category' => 'Tailored Stainless Steel Metalwork',
                'badge' => 'Millimetric Accuracy',
                'icon' => 'bi-tools',
                'icon_color' => 'text-primary',
                'step_number' => '05',
                'tagline' => 'Bespoke SS 304 Worktables, Storage Racks, Bain-Maries, Sinks & Architectural SS Craft',
                'description' => 'Every culinary layout has unique architectural pillars, room dimensions, and specific chef preferences. Bijay Enterprises custom fabricates any stainless steel equipment to your exact millimetric drawings. We engineer heavy-duty SS 304 prep worktables, soiled dish scrap tables, multi-tier storage shelving, heated bain-maries, mobile service trolleys, and pick-up counters with argon TIG finish and sound-deadened tabletops.',
                'image' => 'assets/img/products/washing_equipment.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    '100% certified Food Grade SS 304 stainless steel with satin hairline or mirror finish',
                    'Custom fabrication according to site dimensions, irregular pillar cuts, and chef heights',
                    'Heavy-gauge 16 SWG tabletops with sound-deadening marine plywood or SS channel under-reinforcement',
                    'Adjustable nylon leveling bullet feet preventing water accumulation and uneven floor wobble',
                    'Argon shielded TIG welding with ground and polished seamless sanitary radius corners'
                ],
                'scope_list' => [
                    ['title' => 'On-Site Millimetric Precision Measurement', 'desc' => 'Our engineers survey floor slopes, pillar indents, electrical conduits, and door widths to ensure exact fit.'],
                    ['title' => 'Custom 3D CAD Equipment Modeling', 'desc' => 'Drafting worktable heights, sink bowl depths, undershelf configurations, and splashguard profiles.'],
                    ['title' => 'In-House CNC Laser Cutting & Press Bending', 'desc' => 'Automated CNC metal bending ensures razor-sharp angles, seamless joints, and heavy structural integrity.'],
                    ['title' => 'Argon TIG Welding & Satin Grain Polishing', 'desc' => 'Sanitary weld seams eliminating food trap crevices, polished to a matching commercial hairline finish.'],
                    ['title' => 'On-Site Delivery, Leveling & Final Installation', 'desc' => 'Placement, wall anchoring, plumbing drain coupling, and protective film peel-off inspection.']
                ],
                'specs' => [
                    'Stainless Steel Grade' => 'AISI 304 (Certified Food Grade 18% Chromium, 8% Nickel Non-Magnetic)',
                    'Sheet Thickness' => 'Top: 1.5 mm (16 Gauge) | Framework & Under-shelves: 1.2 mm (18 Gauge)',
                    'Framework Legs' => '38 mm Round or Square SS 304 Tubular Pipe with High-Load Cross Bracings',
                    'Custom Products' => 'Prep Tables, Pot Sinks, Bain-Maries, Wall Shelves, Storage Racks, Mobile Carts',
                    'Finish' => 'Commercial Hairline Satin Matte / No-Fingerprint Polished Surface'
                ]
            ]
        ];
    }

    public function index()
    {
        $data['title'] = "End-to-End Commercial Kitchen Services | " . $this->comp['company3'];
        $data['description'] = "Turnkey commercial kitchen engineering, industrial bakery plants, refrigeration & ventilation systems, certified LPG gas pipelines, and custom SS 304 fabrication by " . $this->comp['company3'] . ".";
        $data['services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "index";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function commercial_kitchen()
    {
        $service = $this->services_data['commercial-kitchen-equipment'];
        $data['title'] = $service['title'] . " | Turnkey Setup & Services | " . $this->comp['company3'];
        $data['description'] = $service['tagline'] . " by " . $this->comp['company3'] . ". Complete CAD planning and SS 304 equipment fabrication.";
        $data['service'] = $service;
        $data['all_services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "commercial_kitchen";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function bakery()
    {
        $service = $this->services_data['bakery-food-service-equipment'];
        $data['title'] = $service['title'] . " | Bakery Plants & Services | " . $this->comp['company3'];
        $data['description'] = $service['tagline'] . " by " . $this->comp['company3'] . ". Turnkey bakery setup, rotary rack ovens, and spiral kneaders.";
        $data['service'] = $service;
        $data['all_services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "bakery";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function ventilation()
    {
        $service = $this->services_data['refrigeration-ventilation-systems'];
        $data['title'] = $service['title'] . " | HVAC & Cold Chain Services | " . $this->comp['company3'];
        $data['description'] = $service['tagline'] . " by " . $this->comp['company3'] . ". Commercial exhaust hoods, ducting, and walk-in cold rooms.";
        $data['service'] = $service;
        $data['all_services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "ventilation";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function lpg_gas()
    {
        $service = $this->services_data['lpg-gas-pipeline-installation'];
        $data['title'] = $service['title'] . " | Certified Pipeline Services | " . $this->comp['company3'];
        $data['description'] = $service['tagline'] . " by " . $this->comp['company3'] . ". PESO compliant manifold banks, schedule pipes, and leak detectors.";
        $data['service'] = $service;
        $data['all_services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "lpg_gas";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function fabrication()
    {
        $service = $this->services_data['custom-fabrication-installation'];
        $data['title'] = $service['title'] . " | Custom SS Metalwork | " . $this->comp['company3'];
        $data['description'] = $service['tagline'] . " by " . $this->comp['company3'] . ". Food-grade SS 304 worktables, pot sinks, racks, and bain-maries.";
        $data['service'] = $service;
        $data['all_services'] = $this->services_data;
        $data['module'] = "services";
        $data['view_file'] = "fabrication";
        $data['active_tab'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    public function detail($slug = '')
    {
        $slug = trim(strtolower($slug));

        $dispatch_map = [
            'commercial-kitchen-equipment'          => 'commercial_kitchen',
            'commercial-kitchen'                    => 'commercial_kitchen',
            'commercial_kitchen'                   => 'commercial_kitchen',
            'bakery-food-service-equipment'         => 'bakery',
            'bakery-equipment'                      => 'bakery',
            'bakery'                                => 'bakery',
            'refrigeration-ventilation-systems'     => 'ventilation',
            'refrigeration-and-ventilation-systems' => 'ventilation',
            'ventilation'                           => 'ventilation',
            'lpg-gas-pipeline-installation'         => 'lpg_gas',
            'lpg-gas'                               => 'lpg_gas',
            'lpg_gas'                               => 'lpg_gas',
            'custom-fabrication-installation'       => 'fabrication',
            'custom-fabrication'                    => 'fabrication',
            'fabrication'                           => 'fabrication',
        ];

        if (isset($dispatch_map[$slug])) {
            $fn = $dispatch_map[$slug];
            $this->$fn();
            return;
        }

        // Fallback to services index
        $this->index();
    }
}
