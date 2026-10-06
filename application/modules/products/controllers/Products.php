<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MX_Controller
{
    private $products_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->init_products_data();
    }

    private function init_products_data()
    {
        $this->products_data = [
            'commercial-kitchen-equipment' => [
                'slug' => 'commercial-kitchen-equipment',
                'title' => 'Commercial Kitchen Equipment',
                'category' => 'Core Cooking Equipment',
                'badge' => 'SS 304 Certified',
                'icon' => 'bi-fire',
                'icon_color' => 'text-danger',
                'tagline' => 'Heavy-Duty Culinary Equipment Built for 24/7 High-Volume Commercial Cooking',
                'description' => 'Bijay Enterprises designs and fabricates heavy-gauge Food Grade SS 304 commercial cooking ranges, Chinese high-heat wok burners, tandoor ovens, and deep fryers engineered for top restaurants, hotels, banquet halls, and cloud kitchens.',
                'image' => 'assets/img/products/commercial_kitchen.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Heavy-gauge 16/18 SWG Food Grade SS 304 non-magnetic construction',
                    'High-efficiency casting brass burners with individual pilot valves',
                    'Laser-cut seamless spill trays and heavy-duty cast iron pan supports',
                    'Splashback with integrated swivel water faucets and grease drainage channels',
                    'Ergonomic control knobs with insulated safety baffles'
                ],
                'machinery_list' => [
                    ['name' => 'Indian & Continental Gas Cooking Ranges', 'desc' => 'Available in 2, 3, 4, and 6 burner configurations with or without under-shelf ovens.'],
                    ['name' => 'High-Pressure Chinese Wok Stations', 'desc' => 'Equipped with heavy jet/torch burners, water curtain cooling, and dome backsplashes.'],
                    ['name' => 'SS Square & Round Clay Tandoors', 'desc' => 'Double-wall insulated with imported high-temperature thermal wool and authentic clay pot.'],
                    ['name' => 'Thermostatic Deep Fryers & Griddles', 'desc' => 'Rapid heat recovery electric and gas fryers with cold-zone sediment traps.'],
                    ['name' => 'Commercial Boiling Kettles & Stock Pot Stoves', 'desc' => 'Built for bulk catering, sambar/gravy preparation, and continuous rice boiling.']
                ],
                'specs' => [
                    'Material Grade' => 'Food Grade SS 304 (Certified 18/8 Chrome-Nickel)',
                    'Sheet Thickness' => '1.2 mm to 1.6 mm (16 & 18 Gauge)',
                    'Gas Compatibility' => 'LPG (Commercial Cylinder Manifold) / PNG / Biogas',
                    'Burner Type' => 'Heavy Cast Iron T-Burners, M2 Burners & High-Heat Jet Torches',
                    'Warranty' => '1 Year Comprehensive Manufacturer Warranty + AMC Options'
                ]
            ],
            'bakery-equipment' => [
                'slug' => 'bakery-equipment',
                'title' => 'Bakery Equipment',
                'category' => 'Baking Machinery',
                'badge' => 'Automated Controls',
                'icon' => 'bi-cake2-fill',
                'icon_color' => 'text-warning',
                'tagline' => 'Precision Temperature-Controlled Industrial Baking Ovens & Dough Systems',
                'description' => 'From high-capacity rotary rack ovens to precision spiral dough mixers and humidity-controlled proofing chambers, Bijay Enterprises equips retail bakeries and industrial confectionery plants with dependable baking technology.',
                'image' => 'assets/img/products/bakery_equipment.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Microprocessor digital PID temperature controllers with acoustic timer alarms',
                    'High-grade rockwool insulation minimizing external heat loss and fuel consumption',
                    'Food contact SS 304 spiral bowls, dough hooks, and whipping whisks',
                    'High-yield steam injection systems for crusty artisan breads and baguettes',
                    'Overload protection switches with fail-safe safety guards on all rotating mixers'
                ],
                'machinery_list' => [
                    ['name' => 'Industrial Rotary Rack Ovens', 'desc' => 'Available in 40, 80, 120, and 200 loaf capacities; powered by Diesel, LPG, or Electric.'],
                    ['name' => 'Deck Baking Ovens (1, 2, 3 Deck)', 'desc' => 'Independent top and bottom heating elements with imported refractory stone hearths.'],
                    ['name' => 'Heavy-Duty Spiral Dough Kneaders', 'desc' => 'Dual-speed two-way bowl rotation ensuring smooth, uniform gluten development without heat buildup.'],
                    ['name' => 'Automated Planetary Whipping Mixers', 'desc' => 'Variable-speed planetary motion for egg whites, cake batters, creams, and light pastry.'],
                    ['name' => 'Humidity Controlled Fermentation Proofers', 'desc' => 'Digital temperature & humidity regulation for flawless yeast dough proofing.']
                ],
                'specs' => [
                    'Material' => 'SS 304 Food Contact Parts & Heavy Powder Coated Structural Frame',
                    'Operating Temperature' => 'Up to 350°C with Precision ±2°C Thermostat',
                    'Power Source' => 'Three Phase 415V 50Hz / Single Phase 230V / LPG / Diesel',
                    'Safety Features' => 'Emergency Stop Push-Button, Interlocking Safety Guards & Flame Failure Sensor',
                    'Warranty' => '1 Year On-Site Warranty on Heating Elements & Gearbox'
                ]
            ],
            'display-counter' => [
                'slug' => 'display-counter',
                'title' => 'Display Counter',
                'category' => 'Presentation & Merchandising',
                'badge' => 'Custom Glass & LED',
                'icon' => 'bi-shop',
                'icon_color' => 'text-info',
                'tagline' => 'Luxury Glass Display Cases & Food Merchandising Stations with Warm LED Accents',
                'description' => 'Elevate your front-of-house food presentation with Bijay Enterprises custom fabricated hot and cold food display counters, luxury pastry showcases, curved glass sweet counters, and wet/dry bain maries.',
                'image' => 'assets/img/products/display_counter.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Ultra-clear toughened curved or rectangular glass with condensation-free heating',
                    'Warm golden LED or cool daylight showcase lighting on every shelf level',
                    'Precision temperature ranges tailored for sweets, pastries, savories, and hot snacks',
                    'Laser-finished SS 304 mirror or brush-satin trims with custom Corian/granite fascia',
                    'Smooth sliding rear glass doors with magnetic seals and self-closing hinges'
                ],
                'machinery_list' => [
                    ['name' => 'Heated Food Display Warmers', 'desc' => 'Maintains fried foods, samosas, and patties crisp with integrated bottom humidity water tray.'],
                    ['name' => 'Chilled Sweet & Pastry Showcases', 'desc' => 'Maintains 2°C to 8°C with gentle forced-air cooling preventing pastry drying.'],
                    ['name' => 'Electric Bain Marie Counter', 'desc' => 'Accommodates GN 1/1, 1/2, and 1/3 containers for hot buffet & self-service service lines.'],
                    ['name' => 'Corner & Island Confectionery Units', 'desc' => 'Bespoke custom-dimensional displays built to architectural CAD specifications.'],
                    ['name' => 'Cash & Billing Counter Extensions', 'desc' => 'Matching front design with secure lockable cash drawers and cable conduit ducts.']
                ],
                'specs' => [
                    'Glass Type' => '8 mm / 10 mm Toughened Float Glass (Flat or Curved)',
                    'Refrigerant / Heating' => 'Eco-friendly R134a / R404a or Tubular Incoloy Immersion Heaters',
                    'Lighting' => 'Low-Heat Waterproof Golden / Daylight LED Strips',
                    'Pan Compatibility' => 'Universal Standard Gastronorm (GN) Pan Layouts',
                    'Customization' => 'Choice of SS 304 Finish, Wooden Laminate, or ACP Exterior'
                ]
            ],
            'refrigeration-equipment' => [
                'slug' => 'refrigeration-equipment',
                'title' => 'Refrigeration Equipment',
                'category' => 'Commercial Cold Storage',
                'badge' => 'Tropicalized +43°C',
                'icon' => 'bi-snow',
                'icon_color' => 'text-cyan',
                'tagline' => 'Heavy-Duty Commercial Chillers, Blast Freezers & Undercounter Prep Refrigerators',
                'description' => 'Engineered specifically for hot Indian kitchen environments with ambient tolerance up to +43°C. Features genuine Emerson Copeland and Embraco compressors, auto-defrost digital controllers, and high-density polyurethane insulation.',
                'image' => 'assets/img/products/refrigeration_equipment.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Tropicalized copper tube condensers with large fin spacing for dusty commercial kitchens',
                    'Cyclopentane high-pressure foamed polyurethane insulation (zero ODP, zero GWP)',
                    'Carel / Dixell micro-controller thermostats with digital temperature readouts',
                    'Magnetic snap-in perimeter door gaskets for seamless thermal sealing',
                    'Self-closing reversible doors with 90-degree dwell open position'
                ],
                'machinery_list' => [
                    ['name' => '2-Door & 4-Door Vertical Upright Chillers & Freezers', 'desc' => 'High capacity 500L and 1000L cold storage with adjustable SS wire shelves.'],
                    ['name' => 'Undercounter Saladette & Pizza Prep Tables', 'desc' => 'Refrigerated pan rails above with spacious refrigerated storage underneath.'],
                    ['name' => 'Blast Chillers & Shock Freezers', 'desc' => 'Cools cooked food from +70°C to +3°C in 90 minutes to comply with strict HACCP standards.'],
                    ['name' => 'Industrial Stainless Steel Water Coolers', 'desc' => 'Continuous cold drinking water dispensers for employee dining and banquet pantries.'],
                    ['name' => 'Bar Back Undercounter Beverage Coolers', 'desc' => 'Double glass door chillers for craft beers, wines, and bar garnishes.']
                ],
                'specs' => [
                    'Compressor Brand' => 'Emerson Copeland / Embraco / Danfoss Heavy-Duty',
                    'Temperature Range' => 'Chillers: +2°C to +8°C | Freezers: -18°C to -22°C',
                    'Insulation Density' => '40 kg/m³ High-Density Cyclopentane PUF (60 mm to 80 mm)',
                    'Condenser / Evaporator' => '100% Inner-Grooved Seamless Copper Tubes',
                    'Defrosting' => 'Automatic Off-Cycle / Hot Gas Heated Defrost with Auto Evaporation'
                ]
            ],
            'kitchen-ventilation-system' => [
                'slug' => 'kitchen-ventilation-system',
                'title' => 'Kitchen Ventilation System',
                'category' => 'Exhaust & Fresh Air',
                'badge' => 'Baffle SS Filters',
                'icon' => 'bi-wind',
                'icon_color' => 'text-success',
                'tagline' => 'High-CFM Exhaust Hoods, Centrifugal Blowers & Grease-Free Air Management Systems',
                'description' => 'A clean, smoke-free kitchen is critical for staff productivity and fire safety. Bijay Enterprises manufactures commercial exhaust hoods with removable baffle grease filters, heavy-gauge galvanized iron ductwork, and centrifugal blowers.',
                'image' => 'assets/img/products/ventilation_system.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'All-welded SS 304 hood construction preventing grease leaks on cooking lines',
                    'Removable stainless steel baffle filters capturing up to 95% of airborne cooking grease',
                    'High static pressure backward curved centrifugal exhaust fans for long duct runs',
                    'Fresh air make-up supply systems restoring air balance and lowering kitchen temperatures',
                    'Optional electrostatic precipitator (ESP) units and wet air scrubbers for residential zones'
                ],
                'machinery_list' => [
                    ['name' => 'Wall Canopy & Island Exhaust Hoods', 'desc' => 'Custom sized to extend 6-12 inches beyond cooking range footprint on all sides.'],
                    ['name' => 'Centrifugal Exhaust Blowers & SISW Fans', 'desc' => 'Dynamically balanced impellers coupled with heavy Crompton/Havells TEFC motors.'],
                    ['name' => 'Galvanized Iron (GI) Ductwork & Cladding', 'desc' => 'Fabricated using 20/22/24 gauge lock-formed sheet with airtight flanged joints.'],
                    ['name' => 'Fresh Air Supply Louvers & Dampers', 'desc' => 'Filtered outside air intake delivering positive air movement across chef stations.'],
                    ['name' => 'Eco Air Scrubbers & Carbon Filters', 'desc' => 'Eliminates odor and heavy kitchen smoke before discharging into public environment.']
                ],
                'specs' => [
                    'Hood Sheet Grade' => 'Food Grade SS 304 (1.2 mm / 18 Gauge)',
                    'Filter Type' => 'Removable Stainless Steel Baffle Filter with Grease Drainage Trough',
                    'Blower Capacity' => '1500 CFM to 25,000+ CFM Custom Engineered',
                    'Motor Rating' => 'IP55 Class F Insulated High-Torque Electric Motor',
                    'Noise Level' => 'Vibration Isolator Springs & Canvas Duct Couplers (<68 dB)'
                ]
            ],
            'washing-equipment' => [
                'slug' => 'washing-equipment',
                'title' => 'Washing Equipment',
                'category' => 'Hygiene & Warewashing',
                'badge' => 'Anti-Corrosive SS',
                'icon' => 'bi-droplet-half',
                'icon_color' => 'text-primary',
                'tagline' => 'Seamless Pot Wash Sinks, Dishwasher In-feed Benches & Soil Scrap Tables',
                'description' => 'Meeting strict clinical food hygiene and NABH hospital standards requires robust washing equipment. We manufacture seamless deep pot wash sinks, pre-rinse dish scraper tables, mobile plate trolleys, and grease interceptors.',
                'image' => 'assets/img/products/washing_equipment.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Deep-drawn single, double, and triple bowl pot wash sinks with anti-splash aprons',
                    'Fully sound-deadened bowl bottoms preventing metallic clatter during high-volume dishwashing',
                    'Integrated garbage chute holes with rubber collars on dish scraping tables',
                    'Adjustable nylon leveling bullet feet on SS 304 heavy tubular legs',
                    'Removable stainless steel under-sink grease traps preventing pipe blockages'
                ],
                'machinery_list' => [
                    ['name' => 'Triple Bowl Pot Wash Station', 'desc' => 'Dedicated wash, rinse, and chemical sanitizing bowls with pre-rinse overhead shower faucet.'],
                    ['name' => 'Dishwasher Entry & Exit Landing Tables', 'desc' => 'Custom slotted track design matching commercial hood-type dishwashers.'],
                    ['name' => 'Soiled Plate Scrap Tables', 'desc' => 'Equipped with waste chutes, rubber scrap rings, and dish rack storage shelves below.'],
                    ['name' => 'Under-Sink Stainless Grease Traps', 'desc' => 'Multi-baffle grease separation chambers preventing greasy municipal sewer jams.'],
                    ['name' => 'Mobile Plate & Tray Landing Trolleys', 'desc' => 'Heavy-duty non-marking swiveling castor wheels with directional foot locks.']
                ],
                'specs' => [
                    'Material' => '100% SS 304 Deep-Drawn Heavy Gauge Stainless Steel',
                    'Bowl Depth' => '300 mm to 450 mm Deep Pot Capacity with Anti-Overflow Hole',
                    'Backsplash' => '100 mm to 150 mm Fully Enclosed Sanitary Splash Guard',
                    'Tubular Legs' => '38 mm Round / Square SS 304 Pipe with High Load Cross Bracing',
                    'Drainage' => 'Heavy Brass / SS Lever Waste Coupling with Removable Strainer Basket'
                ]
            ],
            'lpg-gas-pipeline-installation' => [
                'slug' => 'lpg-gas-pipeline-installation',
                'title' => 'L.P.G. Gas Pipeline Installation',
                'category' => 'Fuel & Safety Engineering',
                'badge' => 'CCOE & PESO Standards',
                'icon' => 'bi-shield-lock-fill',
                'icon_color' => 'text-warning',
                'tagline' => 'Certified Commercial LPG Manifold Banks, Pipeline Networks & Gas Leak Detectors',
                'description' => 'Cooking gas safety is paramount in high-output kitchens. Bijay Enterprises provides turnkey LPG pipeline installation including cylinder manifold banks (VOT/LOT), seamless schedule pipes, emergency shutoff valves, and safety compliance.',
                'image' => 'assets/img/products/gas_pipeline.jpg',
                'fallback_image' => 'assets/img/kitchen_showcase.jpg',
                'features' => [
                    'Forged Class C seamless high-pressure pipeline conforming to IS:1239 standards',
                    'Multi-cylinder VOT (Vapor Off-Take) & LOT (Liquid Off-Take) manifold headers',
                    'Digital pressure transmitters with primary & secondary two-stage gas regulators',
                    'Automatic gas leak detection sensors linked to solenoid shutoff valves and audio sirens',
                    'Certified hydrostatic and pneumatic pressure testing with complete safety documentation'
                ],
                'machinery_list' => [
                    ['name' => 'Commercial Cylinder Manifold Banks (4 to 20+ Cylinders)', 'desc' => 'Dual-arm manifold allowing cylinder replacement without interrupting kitchen gas supply.'],
                    ['name' => 'Two-Stage Pressure Regulator Systems', 'desc' => 'Steps down high cylinder pressure to a safe, steady working pressure for cooking ranges.'],
                    ['name' => 'Copper Pig-Tails & Flexible SS Braided Hoses', 'desc' => 'Burst-tested flexible connectors preventing strain and vibration damage.'],
                    ['name' => 'Electronic Gas Leak Detection & Alarm Panel', 'desc' => 'Instantly trips main gas solenoid valve within 0.5 seconds of detected hydrocarbon trace.'],
                    ['name' => 'Appliance Ball Valves & Burner Connections', 'desc' => 'Individual quarter-turn isolation valves for every stove and tandoor in the kitchen.']
                ],
                'specs' => [
                    'Piping Standard' => 'Heavy Forged "C" Class Seamless Carbon Steel (IS:1239 Part 1)',
                    'Fittings Standard' => 'Forged A105 / 3000 PSI High-Pressure Socket Weld & Threaded Fittings',
                    'Testing Pressure' => 'Hydrostatic Tested up to 25 kg/cm² & Pneumatic Soap Bubble Tested',
                    'Safety Compliance' => 'PESO / CCOE & Local Fire Safety NOC Guidelines',
                    'Safety Valves' => 'Quick Emergency Push-Button Shut-Off & Solenoid Valves'
                ]
            ]
        ];
    }

    public function index()
    {
        $data['title'] = "Commercial Kitchen & Bakery Product Catalogue | " . $this->comp['company3'];
        $data['description'] = "Explore heavy-duty commercial kitchen equipment, industrial bakery ovens, display counters, refrigeration systems, exhaust hoods, and LPG gas pipelines manufactured by " . $this->comp['company3'] . ".";
        $data['products'] = $this->products_data;
        $data['module'] = "products";
        $data['view_file'] = "index";
        echo Modules::run('template/layout2', $data);
    }

    public function commercial_kitchen()
    {
        $data['title'] = "Commercial Kitchen Equipment | " . $this->comp['company3'];
        $data['description'] = "Heavy-Duty Culinary Equipment Built for 24/7 High-Volume Commercial Cooking by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "commercial_kitchen";
        echo Modules::run('template/layout2', $data);
    }

    public function bakery()
    {
        $data['title'] = "Bakery Equipment | " . $this->comp['company3'];
        $data['description'] = "Precision Temperature-Controlled Industrial Baking Ovens & Dough Systems by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "bakery";
        echo Modules::run('template/layout2', $data);
    }

    public function display_counter()
    {
        $data['title'] = "Display Counter | " . $this->comp['company3'];
        $data['description'] = "Luxury Glass Display Cases & Food Merchandising Stations with Warm LED Accents by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "display_counter";
        echo Modules::run('template/layout2', $data);
    }

    public function refrigeration()
    {
        $data['title'] = "Refrigeration Equipment | " . $this->comp['company3'];
        $data['description'] = "Heavy-Duty Commercial Chillers, Blast Freezers & Undercounter Prep Refrigerators by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "refrigeration";
        echo Modules::run('template/layout2', $data);
    }

    public function ventilation()
    {
        $data['title'] = "Kitchen Ventilation System | " . $this->comp['company3'];
        $data['description'] = "High-CFM Exhaust Hoods, Centrifugal Blowers & Grease-Free Air Management Systems by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "ventilation";
        echo Modules::run('template/layout2', $data);
    }

    public function washing()
    {
        $data['title'] = "Washing Equipment | " . $this->comp['company3'];
        $data['description'] = "Seamless Pot Wash Sinks, Dishwasher In-feed Benches & Soil Scrap Tables by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "washing";
        echo Modules::run('template/layout2', $data);
    }

    public function lpg_gas()
    {
        $data['title'] = "L.P.G. Gas Pipeline Installation | " . $this->comp['company3'];
        $data['description'] = "Certified Commercial LPG Manifold Banks, Pipeline Networks & Gas Leak Detectors by " . $this->comp['company3'] . ".";
        $data['module'] = "products";
        $data['view_file'] = "lpg_gas";
        echo Modules::run('template/layout2', $data);
    }

    public function detail($slug = '')
    {
        $slug = trim(strtolower($slug));

        $dispatch_map = [
            'commercial-kitchen-equipment' => 'commercial_kitchen',
            'commercial-kitchen'           => 'commercial_kitchen',
            'commercial_kitchen'          => 'commercial_kitchen',
            'bakery-equipment'             => 'bakery',
            'bakery'                       => 'bakery',
            'display-counter'              => 'display_counter',
            'display_counter'              => 'display_counter',
            'refrigeration-equipment'      => 'refrigeration',
            'refrigeration'                => 'refrigeration',
            'kitchen-ventilation-system'   => 'ventilation',
            'ventilation'                  => 'ventilation',
            'washing-equipment'            => 'washing',
            'washing'                      => 'washing',
            'lpg-gas-pipeline-installation' => 'lpg_gas',
            'lpg-gas'                      => 'lpg_gas',
            'lpg_gas'                      => 'lpg_gas',
        ];

        if (isset($dispatch_map[$slug])) {
            $fn = $dispatch_map[$slug];
            $this->$fn();
            return;
        }

        // Fallback to commercial_kitchen
        $this->commercial_kitchen();
    }
}
