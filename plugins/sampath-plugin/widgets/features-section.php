<?php
/*
Features section
*/
?>
<?php

class Feature_Section_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'Features-Section';
    }

    public function get_title()
    {
        return esc_html__('Feature Section', 'sampath-plugin');
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
        return ['Features', 'sampath', 'samtheme'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'Feature_Content_Section',
            [
                'label' => esc_html__('Feature-Content', 'sampath-plugin'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'features_title',
            [
                'label' => esc_html__('Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Bus Features', 'sampath-plugin'),
                'placeholder' => esc_html__('Type your title here', 'sampath-plugin'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'feature_title_typography',
                'selector' => '{{WRAPPER}} .feature-title',
            ]
        );
        $this->add_control(
            'feature_text_color',
            [
                'label' => esc_html__('Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'features_subtitle',
            [
                'label' => esc_html__('Spark Change', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Bus Features', 'sampath-plugin'),
                'placeholder' => esc_html__('Type your title here', 'sampath-plugin'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'subtitle_typography',
                'selector' => '{{WRAPPER}} .feature-sub-title',
            ]
        );
        $this->add_control(
            'subtitle_text_color',
            [
                'label' => esc_html__('Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-sub-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Feature-list',
            [
                'label' => esc_html__('Feature List Left', 'sampath-plugin'),
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
                        'name' => 'list_number',
                        'label' => esc_html__('Number', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                    ],
                    [
                        'name' => 'list_icon',
                        'label' => esc_html__('Icon', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'name' => 'list_content',
                        'label' => esc_html__('Content', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'sampath-plugin'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'list_color',
                        'label' => esc_html__('Color', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                        ],
                    ]
                ],
                'default' => [
                    [
                        'list_title' => esc_html__('Best of Efficiency', 'sampath-plugin'),
                        'list_content' => esc_html__('LPO bus with doors in FOH and WB, 32 Seats with Double door, Upto 200 kms per day, Regenerative braking', 'sampath-plugin'),
                        'list_number' => esc_html__('01'),
                        'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'list_title' => esc_html__('Best of Efficiency', 'sampath-plugin'),
                        'list_content' => esc_html__('LPO bus with doors in FOH and WB, 32 Seats with Double door, Upto 200 kms per day, Regenerative braking', 'sampath-plugin'),
                        'list_number' => esc_html__('02', 'sampath-plugin'),
                        'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ],
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->add_control(
            'Feature-image',
            [
                'label' => esc_html__('Choose Image', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'Feature-list-right',
            [
                'label' => esc_html__('Feature List right', 'sampath-plugin'),
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
                        'name' => 'list_number',
                        'label' => esc_html__('Number', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                    ],
                    [
                        'name' => 'list_icon',
                        'label' => esc_html__('Icon', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ],
                    ],
                    [
                        'name' => 'list_content',
                        'label' => esc_html__('Content', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'sampath-plugin'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'list_color',
                        'label' => esc_html__('Color', 'sampath-plugin'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                        ],
                    ]
                ],
                'default' => [
                    [
                        'list_title' => esc_html__('Best of Performance', 'sampath-plugin'),
                        'list_content' => esc_html__('Best of Power - 235 KW,Best of Torque - 3255 Nm,Best of Range - 200 kms per day*,Fast Charging - 0-80% in 1.5 Hrs', 'sampath-plugin'),
                        'list_number' => esc_html__('3'),
                        'list_icon' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ]
                    ],
                    [
                        'list_title' => esc_html__('Best of Safety', 'sampath-plugin'),
                        'list_content' => esc_html__('Intelligent FDSS, Disk Brakes, Stronger & Lighter Domex Frame, Roof mounted batteries, Rear View Camera, Destination Boards, Start Stop button, Stable liquid cooled LFP battery compliant to Nail penetration test', 'sampath-plugin'),
                        'list_number' => esc_html__('4', 'sampath-plugin'),
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
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo <<<HTML
<section class="md:px-[50px] px-[20px]">
    <div class="content-section">
        <p class="bg-[#f6f6f6] w-fit px-3 py-1 rounded-lg feature-sub-title">{$settings['features_subtitle']}</p>
        <h1 class="md:text-[50px] text-[40px] md:leading-[60px] leading-[50px] md:pb-0 pb-[30px] font-bold feature-title">{$settings['features_title']}</h1>
    </div>
    <div class="grid md:grid-cols-3 md:gap-10">
        <div>
HTML;
        if ($settings['Feature-list']) {
            foreach ($settings['Feature-list'] as $index => $items) {
                $count = $index + 1;
                echo <<<HTML
        <div class="flex gap-6 md:pt-[50px] md:pb-0 pb-[20px]">
            <div>
                <div class="w-[64px] h-[64px] rounded-lg bg-black">
                    <i class="{$items['list_icon']['value']} text-white w-full h-full icon-list-one text-[40px] md:px-3 grid place-items-center md:py-3"></i>
                </div>
            </div>
            <div>
                <div class="flex justify-between">
                    <h3 class="text-[20px] font-bold">{$items['list_title']}</h3><span class="text-[#707070]">{$count}</span>
                </div>
                <p class="text-[16px] font-medium text-[#707070] py-[10px] leading-[26px]">{$items['list_content']}</p>
            </div>               
            </div>
HTML;
            }
        }
        echo <<<HTML
        </div>
        <div class="flex justify-center items-baseline md:pt-[40px] md:pb-0 pb-[30px]">
            <img src="{$settings['Feature-image']['url']}" alt="No-image">
        </div>
        <div>
HTML;
        if ($settings['Feature-list-right']) {
            foreach ($settings['Feature-list-right'] as $index => $itemsRight) {
                $count = $index + 01;

                echo <<<HTML
        <div class="flex gap-6 md:pt-[50px] md:pb-0 pb-[20px]">
            <div>
                <div class="w-[64px] h-[64px] rounded-lg bg-[#71ca00]">
                    <i class="{$itemsRight['list_icon']['value']} text-white w-full h-full icon-list-one text-[40px] md:px-3 md:py-3 grid place-items-center"></i>
                </div>
            </div>
            <div>
                <div class="flex justify-between">
                    <h3 class="text-[20px] font-bold">{$itemsRight['list_title']}</h3><span class="text-[#707070]">{$count}</span>  
                </div>
                <p class="text-[16px] font-medium text-[#707070] py-[10px] leading-[26px]">{$itemsRight['list_content']}</p>
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
//Register
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Feature_Section_Widget());
