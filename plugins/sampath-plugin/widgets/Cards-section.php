<?php
/*
Cards Section
*/
?>
<?php

class Cards_Section_Widgets extends \Elementor\Widget_Base{

    public function get_name() {
        return 'Card-Section';
    }

    public function get_title() {
        return esc_html__( 'Card Section', 'sampath-plugin' );
    }

    public function get_icon() {
        return 'eicon-menu-card';
    }

    public function get_categories() {
        return [ 'b2w_category' ];
    }

    public function get_keywords() {
        return['Card','list' , 'Section','sampath','drive'];
    }

    protected function register_controls() {

    $this->start_controls_section(
        'content_section',
        [
            'label' => esc_html__( 'Content', 'sampath-plugin' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
        'Main_title',
        [
            'label' => esc_html__( 'Title', 'sampath-plugin' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Power & Precision', 'sampath-plugin' ),
            'placeholder' => esc_html__( 'Type your title here', 'sampath-plugin' ),
        ]
        );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'heading_typography',
            'selector' => '{{WRAPPER}} .heading',
        ]
    );
    $this->add_control(
        'text_color',
        [
            'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .heading' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'Sub_title',
        [
            'label' => esc_html__( 'Sub Title', 'sampath-plugin' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__( 'Auto EV', 'sampath-plugin' ),
            'placeholder' => esc_html__( 'Subtitle', 'sampath-plugin' ),
        ]
        );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'subheading_typography',
            'selector' => '{{WRAPPER}} .subheading',
        ]
    );
    $this->add_control(
        'text_color',
        [
            'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .subheading' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'background',
            'types' => [ 'classic', 'gradient', 'video' ],
            'selector' => '{{WRAPPER}} .card-section',
        ]
    );
    $this->end_controls_section();
    $this->start_controls_section(
        'List_section Left',
        [
            'label' => esc_html__( 'List Section One', 'sampath-plugin' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );
    $this->add_control(
    'Card-list',
        [
            'label' => esc_html__( 'Repeater List', 'textdomain' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => [
                [
                    'name' => 'list_title',
                    'label' => esc_html__( 'Title', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'List Title' , 'sampath-plugin' ),
                    'label_block' => true,
                ],
                [
                    'name' => 'list_content',
                    'label' => esc_html__( 'Content', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'default' => esc_html__( 'List Content' , 'sampath-plugin' ),
                    'show_label' => false,
                ],
                [
                    'name' => 'list_image',
                    'label' => esc_html__( 'Image', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ],
                [
                    'name' => 'list_color',
                    'label' => esc_html__( 'Color', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                    ],
                ]
            ],
            'default' => [
                [
                    'list_title' => esc_html__( 'Safety', 'sampath-plugin' ),
                    'list_content' => esc_html__('1. Supreme Court Guidelines (ref: AIS-063) compliant school busses.\n2. Fire Detection & Suppression/ Alerting systems/ GPS/ CCTV enabled.\n3. Speed governors & Sensor based real time Harsh driving alerts' , 'sampath-plugin' ),
                    'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                [
                    'list_title' => esc_html__( 'Comfort', 'sampath-plugin' ),
                    'list_content' => esc_html__('1. Supreme Court Guidelines (ref: AIS-063) compliant school busses.\n2. Fire Detection & Suppression/ Alerting systems/ GPS/ CCTV enabled.\n3. Speed governors & Sensor based real time Harsh driving alerts' , 'sampath-plugin' ),
                    'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                [
                    'list_title' => esc_html__( 'Maintenance', 'sampath-plugin' ),
                    'list_content' => esc_html__('1. Supreme Court Guidelines (ref: AIS-063) compliant school busses.\n2. Fire Detection & Suppression/ Alerting systems/ GPS/ CCTV enabled.\n3. Speed governors & Sensor based real time Harsh driving alerts' , 'sampath-plugin' ),
                    'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                [
                    'list_title' => esc_html__( 'Compliance', 'sampath-plugin' ),
                    'list_content' => esc_html__('1. Supreme Court Guidelines (ref: AIS-063) compliant school busses.\n2. Fire Detection & Suppression/ Alerting systems/ GPS/ CCTV enabled.\n3. Speed governors & Sensor based real time Harsh driving alerts' , 'sampath-plugin' ),
                    'list_image' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ],
            'title_field' => '{{{ list_title }}}',
        ]
    );
    

    $this->end_controls_section();
}

    protected function render() {
        $settings = $this ->get_settings_for_display();

echo <<<HTML
    <section class="card-section py-[80px]">
    <div class="md:px-[50px] px-[30px]">
        <p class="bg-[#71ca00] text-white w-fit px-5 py-2 rounded-3xl subheading">{$settings['Sub_title']}</p>
        <h1 class="text-[48px] font-bold leading-[60px] pt-5 heading">{$settings['Main_title']}</h1>
        <div class="grid md:grid-cols-4 gap-7 pt-10">
HTML;
        if($settings['Card-list']){
            foreach($settings['Card-list'] as $items){
echo <<<HTML
    <div class="">
                <div class="bg-white p-3 rounded-2xl">
                    <img src="{$items['list_image']['url']}" alt="No-image" class="rounded-xl">
                    <h2 class="text-center text-[20px] font-bold pt-2">{$items['list_title']}</h2>
                </div>
                <div class="pt-4">
                    <li class="list-decimal text-[#707070] md:text-[20px] md:leading-[25px] text-[18px] leading-[28px] pb-2">{$items['list_content']}</li>
                </div>
            </div>
HTML;
            }
        }
echo <<<HTML
        </div>
    </div>
</section>

HTML;

    }
}
// Register 

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Cards_Section_Widgets());