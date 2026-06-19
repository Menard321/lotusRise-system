<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use App\Models\Agent;
use App\Models\Project;
use App\Models\BlogPost;
use App\Models\Career;
use App\Models\Inquiry;
use App\Models\Product;
use App\Models\Order;
use App\Models\Lead;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ────────────────────────────────────────────────
        // 1. Admin User
        // ────────────────────────────────────────────────
        User::updateOrCreate(
            ['email' => 'admin@lotusriseglobal.com'],
            ['name' => 'LotusRise Admin', 'password' => Hash::make('Admin@2026!'), 'role' => 'admin']
        );

        // ────────────────────────────────────────────────
        // 2. Vendor User + Profile
        // ────────────────────────────────────────────────
        $vendorUser = User::updateOrCreate(
            ['email' => 'vendor@lotusriseglobal.com'],
            ['name' => 'Kariakoo Wholesale Ltd', 'password' => Hash::make('Vendor@2026!'), 'role' => 'vendor']
        );

        Vendor::updateOrCreate(
            ['user_id' => $vendorUser->id],
            [
                'business_name'        => 'Kariakoo Wholesale Ltd',
                'owner_name'           => 'Athumani Juma',
                'tin'                  => '123-456-789',
                'vrn'                  => '987-654-321',
                'phone_number'         => '+255 742 987 654',
                'email'                => 'vendor@lotusriseglobal.com',
                'location'             => 'Kariakoo, Dar es Salaam',
                'business_category'    => 'Electronics & Home Appliances',
                'website'              => 'https://kariakoowholesale.co.tz',
                'business_description' => 'We supply top quality electronics and wholesale appliances directly to retailers across East Africa.',
                'status'               => 'approved',
            ]
        );

        // ────────────────────────────────────────────────
        // 3. Agent User + Profile
        // ────────────────────────────────────────────────
        $agentUser = User::updateOrCreate(
            ['email' => 'agent@lotusriseglobal.com'],
            ['name' => 'Sarah Joseph', 'password' => Hash::make('Agent@2026!'), 'role' => 'agent']
        );

        Agent::updateOrCreate(
            ['user_id' => $agentUser->id],
            [
                'full_name'              => 'Sarah Joseph',
                'phone_number'           => '+255 655 123 456',
                'email'                  => 'agent@lotusriseglobal.com',
                'region'                 => 'Mwanza',
                'district'               => 'Nyamagana',
                'occupation'             => 'Entrepreneur',
                'preferred_package'      => 'monthly',
                'subscription_status'    => 'active',
                'subscription_expires_at' => now()->addMonth(),
            ]
        );

        // ────────────────────────────────────────────────
        // 4. Portfolio Projects
        // ────────────────────────────────────────────────
        $projects = [
            [
                'slug'        => 'lotusrise-marketplace',
                'title'       => 'LotusRise Marketplace Portal',
                'category'    => 'Marketplace',
                'description' => 'A robust digital marketplace connecting micro-retailers in Tanzania with bulk suppliers, offering escrow protection and low service fees.',
                'case_study'  => 'Through our marketplace, over 500 small business vendors in Tanzania have gained access to national buyer bases, increasing average sales by 35% in their first quarter.',
            ],
            [
                'slug'        => 'kariakoo-delivery-network',
                'title'       => 'Kariakoo-to-Region Delivery Network',
                'category'    => 'Logistics',
                'description' => 'Synchronized logistics pipeline facilitating safe procurement, consolidated packaging, and fast shipping from Dar es Salaam to regions including Mwanza, Arusha, and Dodoma.',
                'case_study'  => 'We established dedicated cargo hubs, reducing transit times from Dar es Salaam to mainland regions from 4 days to under 30 hours, with a 99.1% package safety rating.',
            ],
            [
                'slug'        => 'sme-inventory-enablement',
                'title'       => 'SME Inventory Digital Enablement',
                'category'    => 'Vendor Solutions',
                'description' => 'Providing simple web-based ERP and sales dashboard tools for small vendors to log stock and run flash marketing campaigns.',
                'case_study'  => 'Participating vendors report significant reductions in stockouts and improved order processing speed through real-time notifications on their custom portals.',
            ],
            [
                'slug'        => 'regional-agent-network',
                'title'       => 'Regional Agent Commission Network',
                'category'    => 'Agent Network',
                'description' => 'Onboarding regional sales agents who serve as local customer success points and onboard local shop owners as verified vendors.',
                'case_study'  => 'Our agent network spans 20+ regions, creating dynamic jobs for youth and ensuring trust through local, face-to-face commercial support.',
            ],
        ];

        foreach ($projects as $p) {
            Project::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // ────────────────────────────────────────────────
        // 5. Blog Posts
        // ────────────────────────────────────────────────
        $posts = [
            [
                'slug'            => 'ecommerce-growth-tanzania',
                'title'           => 'E-Commerce Growth in Tanzania: Opportunities & Challenges',
                'category'        => 'E-Commerce',
                'excerpt'         => 'An in-depth look at how digital commercial networks are expanding across Tanzania and the infrastructure requirements for scalable growth.',
                'content'         => 'Tanzania is experiencing a surge in digital commercial channels, driven by mobile money accessibility (M-Pesa, Tigo Pesa). However, logistics fragmentation remains a bottleneck. LotusRise addresses this by creating a unified workspace combining sourcing, shipping, and local agents to secure trust. By connecting localized regional agents directly with buyers, transactional confidence is restored.',
                'seo_title'       => 'E-Commerce Growth in Tanzania | LotusRise Global',
                'seo_description' => 'Discover the opportunities and logistical solutions driving digital commerce in Tanzania and East Africa.',
                'status'          => 'published',
            ],
            [
                'slug'            => 'smart-sourcing-kariakoo',
                'title'           => 'Smart Sourcing: Bridging the Gap Between Kariakoo and Upcountry Retailers',
                'category'        => 'Logistics',
                'excerpt'         => 'How centralized sourcing and consolidated transport solutions save thousands of shillings for remote store owners.',
                'content'         => 'Retailers in remote regions like Kigoma or Kagera face massive transportation and procurement markups when traveling to Dar es Salaam to purchase inventory. Our Kariakoo Sourcing program coordinates order consolidation and direct regional shipping. This article outlines tips for cost reduction, reliable supplier selection, and tracking.',
                'seo_title'       => 'Kariakoo Sourcing and Delivery Guide | LotusRise Global',
                'seo_description' => 'Save on procurement and transport from Kariakoo. Learn how consolidated logistics keeps retail margins high.',
                'status'          => 'published',
            ],
            [
                'slug'            => 'agent-networks-trust-engine',
                'title'           => 'Why Agent Networks Are the Ultimate Trust Engine in African Trade',
                'category'        => 'Entrepreneurship',
                'excerpt'         => 'Decentralized local representation builds customer confidence far quicker than traditional abstract online portals.',
                'content'         => 'In emerging economies, offline relationships are fundamental. Digital systems are only trusted when supported by a local physical representative. LotusRise Agents act as localized touchpoints: checking goods quality, assisting with payments, and registering vendors. This hybrid model forms a highly-resilient, secure commerce environment.',
                'seo_title'       => 'How Agent Networks Fuel Digital Trade | LotusRise Global',
                'seo_description' => 'Read about how LotusRise agents form the trust bridge between customers and merchants.',
                'status'          => 'published',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(['slug' => $post['slug']], $post);
        }

        // ────────────────────────────────────────────────
        // 6. Careers
        // ────────────────────────────────────────────────
        $careers = [
            [
                'title'        => 'Operations Coordinator',
                'type'         => 'Full-time',
                'location'     => 'Dar es Salaam (Kariakoo Office)',
                'description'  => 'We are seeking an active Operations Coordinator to lead order sorting, regional carrier assignments, and merchant communication.',
                'requirements' => "• 2+ years experience in logistics or wholesale operations.\n• Deep familiarity with Kariakoo wholesale channels.\n• Excellent communication skills in Swahili and English.\n• Comfortable using digital dashboard and warehouse systems.",
            ],
            [
                'title'        => 'Agent Network Coordinator',
                'type'         => 'Full-time',
                'location'     => 'Dodoma Regional Hub',
                'description'  => 'You will be responsible for recruiting, training, and tracking the performance of LotusRise agents across the central and western zones.',
                'requirements' => "• Bachelor's degree in Business Administration, Marketing, or related field.\n• High level of emotional intelligence and training capability.\n• Ability to run regional performance workshops.\n• Experience with mobile-money agency networks is a plus.",
            ],
            [
                'title'        => 'Customer Success Specialist',
                'type'         => 'Internship',
                'location'     => 'Dar es Salaam',
                'description'  => 'Work directly with our marketplace buyers and agents, solving order inquiries, resolving delivery issues, and collecting customer feedback.',
                'requirements' => "• Recent graduate or final year student.\n• Energetic, friendly demeanor with strong phone etiquette.\n• Structured problem-solving mindset.\n• Eager to learn modern ERP and customer service platforms.",
            ],
        ];

        foreach ($careers as $career) {
            Career::updateOrCreate(['title' => $career['title']], $career);
        }

        // ────────────────────────────────────────────────
        // 7. Sample Inquiries
        // ────────────────────────────────────────────────
        Inquiry::firstOrCreate(
            ['email' => 'baraka@gmail.com', 'subject' => 'Wholesale Sourcing Inquiry'],
            [
                'name'    => 'Baraka Mtangi',
                'phone'   => '+255 788 111 222',
                'message' => 'Hello, I own a retail shop in Mbeya and would like to purchase plastic household items in bulk from Kariakoo. How can your logistics service help me consolidate the shipment?',
                'status'  => 'new',
            ]
        );

        Inquiry::firstOrCreate(
            ['email' => 'aisha.m@outlook.com', 'subject' => 'Becoming an Agent in Arusha'],
            [
                'name'    => 'Aisha Mwanga',
                'phone'   => '+255 765 333 444',
                'message' => 'I would like to register as a LotusRise agent in Arusha. I have a registered retail storefront near the main market. Please contact me regarding the training program.',
                'status'  => 'new',
            ]
        );

        // ────────────────────────────────────────────────
        // 8. Demo Vendor Products & Orders
        // ────────────────────────────────────────────────
        $demoVendor = Vendor::where('email', 'vendor@lotusriseglobal.com')->first();

        if ($demoVendor) {
            $demoProducts = [
                ['name' => 'Smart LED TV 43"',                   'category' => 'Electronics',     'price' => 750000, 'stock' => 15, 'status' => 'In Stock'],
                ['name' => 'Bluetooth Soundbar 120W',            'category' => 'Electronics',     'price' => 220000, 'stock' => 30, 'status' => 'In Stock'],
                ['name' => 'Wireless Noise-Cancelling Headphones','category' => 'Electronics',    'price' => 140000, 'stock' => 0,  'status' => 'Out of Stock'],
                ['name' => 'Electric Kettle 1.8L',               'category' => 'Home Appliances', 'price' => 45000,  'stock' => 50, 'status' => 'In Stock'],
                ['name' => 'Standing Fan 16 inch',               'category' => 'Home Appliances', 'price' => 85000,  'stock' => 20, 'status' => 'In Stock'],
            ];

            foreach ($demoProducts as $p) {
                Product::firstOrCreate(
                    ['vendor_id' => $demoVendor->id, 'name' => $p['name']],
                    array_merge($p, ['vendor_id' => $demoVendor->id])
                );
            }

            $demoOrders = [
                ['customer_name' => 'Juma Shaaban (via Mwanza Agent)',   'items' => 'Smart LED TV 43" (x2)',      'total' => 1500000, 'status' => 'Pending'],
                ['customer_name' => 'Rehema Hamisi (via Zanzibar Agent)','items' => 'Bluetooth Soundbar 120W (x1)','total' => 220000,  'status' => 'Dispatched'],
                ['customer_name' => 'John David (via Arusha Agent)',     'items' => 'Electric Kettle 1.8L (x5)', 'total' => 225000,  'status' => 'Delivered'],
                ['customer_name' => 'Fatuma Said (via Mbeya Agent)',     'items' => 'Standing Fan 16 inch (x3)', 'total' => 255000,  'status' => 'Delivered'],
            ];

            foreach ($demoOrders as $o) {
                Order::firstOrCreate(
                    ['vendor_id' => $demoVendor->id, 'customer_name' => $o['customer_name']],
                    array_merge($o, ['vendor_id' => $demoVendor->id])
                );
            }
        }

        // ────────────────────────────────────────────────
        // 9. Demo Agent Leads
        // ────────────────────────────────────────────────
        $demoAgent = Agent::where('email', 'agent@lotusriseglobal.com')->first();

        if ($demoAgent) {
            $demoLeads = [
                ['business_name' => 'Mwanza Smart Retail',    'owner_name' => 'John Juma',   'phone' => '+255 788 123 999', 'category' => 'Retail Customer',  'status' => 'Approved'],
                ['business_name' => 'Nyamagana Electronics',  'owner_name' => 'Mariam Issa', 'phone' => '+255 655 444 333', 'category' => 'Vendor Merchant',  'status' => 'Pending'],
                ['business_name' => 'Mwanza Plastics Ltd',    'owner_name' => 'Ali Hassan',  'phone' => '+255 712 333 666', 'category' => 'Wholesale Buyer',  'status' => 'Approved'],
            ];

            foreach ($demoLeads as $l) {
                Lead::firstOrCreate(
                    ['agent_id' => $demoAgent->id, 'business_name' => $l['business_name']],
                    array_merge($l, ['agent_id' => $demoAgent->id])
                );
            }
        }
    }
}
