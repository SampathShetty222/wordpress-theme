<?php
/*
* B2W Banner Widget
*/


class B2W_Banner_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'b2w_banner_widget' ;
    }

	public function get_title() {
        return esc_html__( 'Banner Section', 'sampath-plugin' );
    }

	public function get_icon() {
        return 'eicon-banner';
    }
	public function get_categories() {
        return [ 'b2w_category' ];
    }
    public function get_keywords() {
		return [ 'Banner', 'sampath' ];
	}
    protected function register_controls() {

            $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		    );
            //----------------------------------------Banner Titlte---------------------------------
            $this->add_control(
                'banner-title',
                [
                    'label' => esc_html__( 'Title', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Zero Emission Bus'),
                    'placeholder' => esc_html__( 'Enter your Title', 'sampath-plugin' ),
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typography',
                    'selector' => '{{WRAPPER}} .banner-title',
                ]
            );
            $this->add_control(
                'banner-heading-color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .banner-title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background',
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .your-class',
                ]
            );

            //-------------------------------------Subheading--------------------------------------

            $this->add_control(
                'banner-sub-title',
                [
                    'label' => esc_html__( 'Sub Title', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('1st and only EV bus service in india'),
                    'placeholder' => esc_html__( 'Enter your Sub Title', 'sampath-plugin' ),
                ]
            );
            $this->add_control(
                'subtitle-icon',
                [
                    'label' => esc_html__( 'Icon-One', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
                        'library' => 'fa-solid',
                    ],
                    'recommended' => [
                        'fa-solid' => [
                            'circle',
                            'dot-circle',
                            'square-full',
                        ],
                        'fa-regular' => [
                            'circle',
                            'dot-circle',
                            'square-full',
                        ],
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'subtitle_typography',
                    'selector' => '{{WRAPPER}} .banner-subtitle',
                ]
            );
            $this->add_control(
                'banner-subheading-color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .banner-subtitle' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background1',
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .banner-subtitle',
                ]
            );

            //------------------------------------Banner-description----------------------------------
            $this->add_control(
                'banner-description',
                [
                    'label' => esc_html__( 'Description', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 5,
                    'default' => esc_html__( 'All Things New , All Thing Electric', 'sampath-plugin' ),
                    'placeholder' => esc_html__( 'Type your description here', 'sampath-plugin' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'description_typography',
                    'selector' => '{{WRAPPER}} .banner-description',
                ]
            );
            $this->add_control(
                'banner-description-color',
                [
                    'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .banner-description' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->end_controls_section();
            //----------------------------------------------------------------------------------------//
            $this->start_controls_section(
                'content_section_2',
                [
                    'label' => esc_html__( 'Content-2', 'sampath-plugin' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
                );
                $this->add_control(
                    'box-icon-one',
                    [
                        'label' => esc_html__( 'Icon-One', 'sampath-plugin' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-circle',
                            'library' => 'fa-solid',
                        ],
                        'recommended' => [
                            'fa-solid' => [
                                'circle',
                                'dot-circle',
                                'square-full',
                            ],
                            'fa-regular' => [
                                'circle',
                                'dot-circle',
                                'square-full',
                            ],
                        ],
                    ]
                );
            $this->add_control(
                'range',
                [
                    'label' => esc_html__( 'Range', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 100,
                ]
            );
            $this->add_control(
                'Box-one-1-color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .box-one h3' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background-box-1',
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .box-one',
                ]
            );
            $this->add_control(
                'box-one-2-color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .box-one p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'range-unit',
                [
                    'label' => esc_html__( 'Range Unit', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('KM'),
                ]
            );
            $this->add_control(
                'banner-box-one',
                [
                    'label' => esc_html__( 'Box-Title1', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Range'),
                ]
            );
            $this->add_control(
                'speed',
                [
                    'label' => esc_html__( 'Speed', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'default' => 70,
                ]
            );
            $this->add_control(
                'speed-unit',
                [
                    'label' => esc_html__( 'Range Unit', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Km/h'),
                ]
            );
            $this->add_control(
                'box-one_color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .box-two h3' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'background-box-2',
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .box-two',
                ]
            );
            $this->add_control(
                'box-two-desc_color',
                [
                    'label' => esc_html__( 'Text Color', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .box-two p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'banner-box-two',
                [
                    'label' => esc_html__( 'Box-Title2', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__('Speed'),
                ]
            );
            $this->add_control(
                'box-icon-icon',
                [
                    'label' => esc_html__( 'Icon', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
                        'library' => 'fa-solid',
                    ],
                    'recommended' => [
                        'fa-solid' => [
                            'circle',
                            'dot-circle',
                            'square-full',
                        ],
                        'fa-regular' => [
                            'circle',
                            'dot-circle',
                            'square-full',
                        ],
                    ],
                ]
            );
    
            //------------------------------------------------------------------------------------------//

            $this->add_control(
                'image',
                [
                    'label' => esc_html__( 'Choose Image', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

        $this->end_controls_section();
	}
	protected function render(){
        $settings = $this->get_settings_for_display();

echo <<<HTML
<section class="md:px-[50px] px-[20px] md:flex md:gap-10">
    <div class="content-section md:py-[80px] pt-[50px] md:w-[50%] mx-auto">
        <p class="bg-[#f6f6f6] w-fit px-3 py-1 rounded-lg banner-subtitle md:text-start text-center md:mx-0 mx-[20px]"><i class="{$settings['subtitle-icon']['value']} text-[#71ca00] text-center text-[20px]"></i>
        {$settings['banner-sub-title']}</p>
        <h1 class="md:text-[60px] md:leading-[70px] leading-[50px] text-[40px] font-bold banner-title md:text-start text-center">{$settings['banner-title']}</h1>
        <p class="md:text-[28px] text-[20px] md:text-start text-center text-[grey] font-medium pb-6 banner-description">{$settings['banner-description']}</p>
        <div class="flex gap-5 md:justify-start justify-center">
            <div class="py-[15px] md:px-[55px] px-[40px] bg-[#f6f6f6] rounded-lg box-one shadow">
                <i class="{$settings['box-icon-icon']['value']} text-[#71ca00] text-center text-[45px] pb-3"></i>
                <h3>{$settings['range']}{$settings['range-unit']}</h3>
                <p>{$settings['banner-box-one']}</p>
            </div>
            <div class="py-[15px] md:px-[55px] px-[40px] bg-[#f6f6f6] rounded-lg box-two shadow">
                <i class="{$settings['box-icon-one']['value']} text-[#71ca00] text-center text-[45px] pb-3"></i>
                <h3>{$settings['speed']}{$settings['speed-unit']}</h3>
                <p>{$settings['banner-box-two']}</p>
            </div>
        </div>
    </div>
    <div class="image-section md:w-[50%] md:pt-0 pt-5 flex md:justify-start justify-center">
        <img src="{$settings['image']['url']}" alt="No-image" class="w-[80%] spin-slow">
         <!-- {$settings['image']['url']} -->
    </div>
</section>

HTML;
    }


}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \B2W_Banner_Widget() );
