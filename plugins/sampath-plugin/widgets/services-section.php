<?php
/*
Services Section
*/
?>
<?php

class Services_Section_Widgets extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Services-Section';
    }

    public function get_title()
    {
        return esc_html__('Services Section', 'sampath-plugin');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    public function get_categories()
    {
        return ['b2w_category'];
    }

    public function get_keywords()
    {
        return ['Services', 'list', 'Section', 'sampath'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'sampath-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'main_title',
            [
                'label' => esc_html__('Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('What We Offer ?', 'sampath-plugin'),
                'placeholder' => esc_html__('Type your title here', 'sampath-plugin'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Service Heading', 'sampath-plugin'),
                'name' => 'service_typography',
                'selector' => '{{WRAPPER}} .service-title',
            ]
        );
        $this->add_control(
            'text_color',
            [
                'label' => esc_html__('Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Sub_title',
            [
                'label' => esc_html__('Sub Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Service', 'sampath-plugin'),
                'placeholder' => esc_html__('Subtitle', 'sampath-plugin'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Sub title Typography', 'sampath-plugin'),
                'name' => 'service_subtitle_typography',
                'selector' => '{{WRAPPER}} .sub-title',
            ]
        );
        $this->add_control(
            'text_color',  
            [
                'label' => esc_html__('Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sub-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .card-section',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .service-section',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'List_section Left',
            [
                'label' => esc_html__('List Section One', 'sampath-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'services-list',
            [
                'label' => esc_html__('Repeater List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_title',
                        'label' => esc_html__('Title', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('List Title', 'sampath-plugin'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'list_content',
                        'label' => esc_html__('Content', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'sampath-plugin'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'list_image',
                        'label' => esc_html__('Image', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'list_color',
                        'label' => esc_html__('Color', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .list-color-{{_id}}' => 'color: {{VALUE}}'
                        ],
                    ],
                    [
                        'name' => 'list_link',
                        'label' => esc_html__('List Link', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::URL,
                        'options' => ['url', 'is_external', 'nofollow'],
                        'default' => [
                            'url' => '#',
                            'is_external' => true,
                            'nofollow' => true,
                            // 'custom_attributes' => '',
                        ],
                        'label_block' => true,

                    ]
                ],

                'default' => [
                    [
                        'list_title' => esc_html__('Projects', 'sampath-plugin'),
                        'list_content' => esc_html__('Quality infrastructure, international and European projects, food and agricultural commodity', 'sampath-plugin'),
                        'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    [
                        'list_title' => esc_html__('Comfort', 'sampath-plugin'),
                        'list_content' => esc_html__('Internal and supplier audits, GAP analysis, management systems, and many more...', 'sampath-plugin'),
                        'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    [
                        'list_title' => esc_html__('advisory and consulting services', 'sampath-plugin'),
                        'list_content' => esc_html__('DRINA Consulting Pvt. Ltd. is a consulting company founded by an international group of business people with rich experience in working at different operational an', 'sampath-plugin'),
                        'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );
        $this->add_control(
            'website_link',
            [
                'label' => esc_html__('Link', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo <<<HTML
<section
        class="service-section rounded-3xl mx-auto md:max-w-7xl my-14 md:pl-24 md:py-24 py-10 px-7 md:px-0 shadow-common">
        <div>
            <p class="sub-title text-base font-light text-primary">{$settings['Sub_title']}</p>
            <h1 class="service-title text-primary font-heading md:text-heading text-4xl pb-5 md:pb-0">{$settings['main_title']}</h1> 
        </div>
HTML;
        if ($settings['services-list']) {
            foreach ($settings['services-list'] as $index => $items) {
                $count = $index + 01;

                echo <<<HTML
        <div class="md:max-w-[90%] mx-auto place-items-center md:pt-20 pt-10 pb-10 border-b-2 border-[#E6EBF1]">
            <div class="flex">
                <div class="md:w-[40%] w-[15%] pr-3">
                    <img src="{$items['list_image']['url']}" alt="ServicesImage">
                </div>
                <div class="md:w-[50%] w-[80%]">
                    <h3 class="list-color-{$count} font-heading text-primary text-2xl font-semibold uppercase">{$items['list_title']}</h3>
                    <p class="list-description pt-5 font-description text-primary text-base font-normal capitalize md:pr-10">{$items['list_content']}</p>
                </div>
                <div class="md:w-[10%] w-[5%] pt-2">
                    <a href="{items['list_link']['url']}" target="blank">
                    <i class="fa-solid fa-arrow-right-long -rotate-45 text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
HTML;
            }
            echo <<<HTML

        <div class="md:text-end text-center md:pe-20 md:pt-10">
            <a href="{$settings['website_link']['url']}">
            <button class="bg-button text-lg font-heading font-normal text-white px-10 py-2 rounded-2xl">View
                More</button>
            </a>
        </div>
    </section>

HTML;

        }
    }
}
// Register 

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Services_Section_Widgets());