<?php
/*
 * About Section
 */


class About_Section_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'about section';
    }

    public function get_title()
    {
        return esc_html__('About Section', 'sampath-plugin');
    }

    public function get_icon()
    {
        return 'eicon-image';
    }
    public function get_categories()
    {
        return ['b2w_category'];
    }
    public function get_keywords()
    {
        return ['Banner', 'sampath'];
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
        //----------------------------------------Banner Titlte---------------------------------

        $this->add_control(
            'about-title',
            [
                'label' => esc_html__('Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Who Are We ?'),
                'placeholder' => esc_html__('Enter your Title', 'sampath-plugin'),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .about-title',
            ]
        );
        $this->add_control(
            'banner-heading-color',
            [
                'label' => esc_html__('Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-title' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'title-align',
            [
                'label' => esc_html__('Alignment', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'sampath-plugin'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'sampath-plugin'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'sampath-plugin'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'Left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .about-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'margin',
            [
                'label' => esc_html__('Margin', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 20,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'about-subtitle',
            [
                'label' => esc_html__('Sub Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About Us'),
                'placeholder' => esc_html__('Enter your Title', 'sampath-plugin'),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Sub Title Typography', 'sampath-plugin'),
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .about-subtitle',
            ]
        );
        $this->add_control(
            'about-subheading-color',
            [
                'label' => esc_html__('Sub Title Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'about_description',
            [
                'label' => esc_html__('Description', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('DRINA Consulting Pvt. Ltd. is a
                    consulting company founded by an international group of business people with rich experience in
                    working at different operational and managerial levels and in different industrial fields, such as standardization, sales & marketing, project product management.'),
                'placeholder' => esc_html__('Type your description here', 'sampath-plugin'),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Description Typography', 'sampath-plugin'),
                'name' => 'about_description_typography',
                'selector' => '{{WRAPPER}} .about_description',
            ]
        );
        $this->add_control(
            'about-description-color',
            [
                'label' => esc_html__('Description Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_description' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'about_description-two',
            [
                'label' => esc_html__('Description Two', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('DRINA’s main business is providing customized business consulting services to clients of all profiles, types of ownership and industrial areas.'),
                'placeholder' => esc_html__('Type your description here', 'sampath-plugin'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .about-section',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style',
            [
                'label' => esc_html__('Style', 'sampath-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'margin-background',
            [
                'label' => esc_html__('Margin', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 60,
                    'right' => 80,
                    'bottom' => 60,
                    'left' => 80,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'padding-background',
            [
                'label' => esc_html__('Padding', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 100,
                    'right' => 100,
                    'bottom' => 100,
                    'left' => 100,
                    'unit' => 'px',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo <<<HTML
<section
        class="about-section md:min-h-[616px] rounded-3xl mx-auto md:max-w-7xl my-14 md:pl-24 px-7 md:px-0 md:py-24 py-12 shadow-common">
        <div>
            <p class="text-base	font-light text-primary about-subtitle">{$settings['about-subtitle']}</p>
            <h1 class="about-title text-primary font-heading md:text-heading text-4xl pb-5 md:pb-0">{$settings['about-title']}</h1>
        </div>
        <div class="md:grid grid-cols-2 gap-10 place-items-center">
            <div class="md:max-w-[80%] mx-auto pb-5 md:pb-0">
                <p class="about_description text-base text-primary font-normal font-description">{$settings['about_description']}</p>
                <p class="about_description pt-5 font-description text-primary text-base font-normal">{$settings['about_description-two']}</p>
            </div>
            <div>
                <img src="{$settings['image']['url']}" alt="About-image">
            </div>
        </div>
</section> 
HTML;
    }
}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \About_Section_Widget());
