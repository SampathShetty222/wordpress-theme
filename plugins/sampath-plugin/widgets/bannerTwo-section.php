<?php
/*
Banner Two section
*/
?>
<?php 

class BannerTwo_Section_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'About-Section-Two';
    }

	public function get_title() {
        return esc_html__( 'About Section Two', 'sampath-plugin' );
    }

	public function get_icon() {
        return 'eicon-post-list';
    }

	public function get_categories() {
        return [ 'b2w_category' ];
    }

	public function get_keywords() {
        return['About','About Two','sampath' , 'samtheme'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'Feature_Content_Section',
            [
                'label' => esc_html__( 'Feature-Content', 'sampath-plugin' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
            );

            $this->add_control(
                'banner_title',
                [
                    'label' => esc_html__( 'Title', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Simplifying Equipment Rental and Sales', 'sampath-plugin' ),
                    'placeholder' => esc_html__( 'Type your title here', 'sampath-plugin' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'banner_title_typography',
                    'selector' => '{{WRAPPER}} .banner_title',
                ]
            );
            $this->add_control(
                'banner_text_color',
                [
                    'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .banner_title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'banner_subtitle',
                [
                    'label' => esc_html__( 'Subtitle Text', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Discover, Rent, and Buy Equipment Effortlessly', 'sampath-plugin' ),
                    'placeholder' => esc_html__( 'Type your Sub Tilte Here', 'sampath-plugin' ),
                ]
            );   
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'label' => esc_html__( 'Subtitle Typography', 'sampath-plugin'),
                    'name' => 'subtitle_typography',
                    'selector' => '{{WRAPPER}} .banner_subtitle',
                ]
            );
            $this->add_control(
                'subtitle_text_color',
                [
                    'label' => esc_html__( 'SubTitle Color', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .banner_subtitle' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'button_content',
                [
                    'label' => esc_html__( 'Button Content', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::BUTTON,
                    'separator' => 'before',
                    'button_type' => 'success',
                    'text' => esc_html__( 'Button', 'sampath-plugin' ),
                    'event' => 'namespace:editor:delete',
                ]
            );
            $this->add_control(
                'button_title',
                [
                    'label' => esc_html__( 'Button Title', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Get Started', 'sampath-plugin' ),
                    'placeholder' => esc_html__( 'Type your Button title here', 'sampath-plugin' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'label' => esc_html__( 'Button Text', 'sampath-plugin'),
                    'name' => 'Button_typography',
                    'selector' => '{{WRAPPER}} .button_title',
                ]
            );
            $this->add_control(
                'button_text_color',
                [
                    'label' => esc_html__( 'Button Text Color', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .button_title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_control(
                'Feature-list',
                [
                    'label' => esc_html__( 'Feature List Left', 'sampath-plugin' ),
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
                            'name' => 'list_number',
                            'label' => esc_html__('Number', 'sampath-plugin'),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                        ],
                        [
                            'name' => 'list_icon',
                            'label' => esc_html__( 'Icon', 'sampath-plugin' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'default' => [
                                'value' => 'fas fa-star',
                                'library' => 'solid',
                            ],
                        ],
                        [
                            'name' => 'list_content',
                            'label' => esc_html__( 'Content', 'sampath-plugin' ),
                            'type' => \Elementor\Controls_Manager::WYSIWYG,
                            'default' => esc_html__( 'List Content' , 'sampath-plugin' ),
                            'show_label' => false,
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
                            'list_title' => esc_html__( 'Best of Efficiency', 'sampath-plugin' ),
                            'list_content' => esc_html__( 'LPO bus with doors in FOH and WB, 32 Seats with Double door, Upto 200 kms per day, Regenerative braking', 'sampath-plugin' ),
                            'list_number' => esc_html__('01'),
                            'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                ],
                        ],
                        [
                            'list_title' => esc_html__( 'Best of Efficiency', 'sampath-plugin' ),
                            'list_content' => esc_html__( 'LPO bus with doors in FOH and WB, 32 Seats with Double door, Upto 200 kms per day, Regenerative braking', 'sampath-plugin' ),
                            'list_number' => esc_html__('02','sampath-plugin'),
                            'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                ],
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );

            // $this->add_group_control(
            //     \Elementor\Group_Control_Background::get_type(),
            //     [
            //         'name' => 'background',
            //         'types' => [ 'classic', 'gradient', 'video' ],
            //         'selector' => '{{WRAPPER}} .feauture-center-image',
            //     ]
            // );

            $this->add_control(
                'Feature-image',
                [
                    'label' => esc_html__( 'Choose Image', 'sampath-plugin' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );

            $this->add_control(
                'Feature-list-right',
                [
                    'label' => esc_html__( 'Feature List right', 'sampath-plugin' ),
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
                            'name' => 'list_number',
                            'label' => esc_html__('Number', 'sampath-plugin'),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                        ],
                        [
                            'name' => 'list_icon',
                            'label' => esc_html__( 'Icon', 'sampath-plugin' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'default' => [
                                'value' => 'fas fa-star',
                                'library' => 'solid',
                            ],
                        ],
                        [
                            'name' => 'list_content',
                            'label' => esc_html__( 'Content', 'sampath-plugin' ),
                            'type' => \Elementor\Controls_Manager::WYSIWYG,
                            'default' => esc_html__( 'List Content' , 'sampath-plugin' ),
                            'show_label' => false,
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
                            'list_title' => esc_html__( 'Best of Performance', 'sampath-plugin' ),
                            'list_content' => esc_html__( 'Best of Power - 235 KW,Best of Torque - 3255 Nm,Best of Range - 200 kms per day*,Fast Charging - 0-80% in 1.5 Hrs', 'sampath-plugin' ),
                            'list_number' => esc_html__('3'),
                            'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                            ]
                        ],
                        [
                            'list_title' => esc_html__( 'Best of Safety', 'sampath-plugin' ),
                            'list_content' => esc_html__( 'Intelligent FDSS, Disk Brakes, Stronger & Lighter Domex Frame, Roof mounted batteries, Rear View Camera, Destination Boards, Start Stop button, Stable liquid cooled LFP battery compliant to Nail penetration test', 'sampath-plugin' ),
                            'list_number' => esc_html__('4','sampath-plugin'),
                            'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                            ]
                        ]
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );
	    $this->end_controls_section();
        $this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Style', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .bannerTwo',
			]
		);
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this -> get_settings_for_display();
        
echo <<<HTML
 <!-- Banner -->
 <section class="bannerTwo relative top-0 z-0 mx-auto py-[80px]">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative md:px-[100px] px-[20px] w-full md:h-[80vh] md:py-0 py-[100px] flex items-center justify-start z-10">
            <div class="grid place-items-start">
                <!-- <p class="text-[#FECA1F80] md:text-2xl text-xl font-bold">Discover, Rent, and Buy Equipment Effortlessly</p> -->
                <h1 class="banner_title py-2 font-bold md:text-6xl text-4xl md:leading-[70px] bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300 md:max-w-3xl">{$settings['banner_title']}</h1>
                <p class="banner_subtitle md:text-xl text-base text-white md:max-w-3xl">{$settings['banner_subtitle']}</p>
                <button class='button_title mt-6 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'><a href="#call-to-action">{$settings['button_title']}</a> <i class="fa-solid fa-arrow-right pl-2 rotate-[-45deg]"></i></button>
            </div>
        </div>
    </section>
HTML;
    }
}

//Register
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \BannerTwo_Section_Widget());
