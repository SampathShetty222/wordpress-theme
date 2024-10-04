<?php
/*
 * Sampath Plugin
 */


class B2W_Banner_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'sampath plugin';
    }

    public function get_title()
    {
        return esc_html__('Banner Section', 'sampath-plugin');
    }

    public function get_icon()
    {
        return 'eicon-banner';
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
            'banner-title',
            [
                'label' => esc_html__('Title', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Customized Business Consulting for Every Industry.'),
                'placeholder' => esc_html__('Enter your Title', 'sampath-plugin'),
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
                'label' => esc_html__('Text Color', 'sampath-plugin'),
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
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .hero-section',
            ]
        );

        $this->add_control(
            'banner-author',
            [
                'label' => esc_html__('Author Name', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Ivo Andrić, The Bridge on the Drina'),
                'placeholder' => esc_html__('Enter your Author Name', 'sampath-plugin'),
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Author Typography' , 'sampath_plugin'),
                'name' => 'author_typography',
                'selector' => '{{WRAPPER}} .author',
            ]
        );
        $this->add_control(
            'banner-author-color',
            [
                'label' => esc_html__('Author Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .author' => 'color: {{VALUE}}',
                ],
            ]
        ); 
        //-----------------------------------------------Banner-button------------------------------

        $this->add_control(
            'banner-button',
            [
                'label' => esc_html__('Banner-Button', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn More'),
                'placeholder' => esc_html__('Enter your Title', 'sampath-plugin'),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__('Button Typography', 'sampath-plugin'),
                'name' => 'bannre_button_typography',
                'selector' => '{{WRAPPER}} .banner-button',
            ]
        );
        $this->add_control(
            'banner-button-color',
            [
                'label' => esc_html__('Banner Button Text Color', 'sampath-plugin'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'website_link',
			[
				'label' => esc_html__( 'Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
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
<section class="pt-11 pb-1 md:pb-0 bg-bg rounded-b-[50px]">
        <div
            class="hero-section md:min-h-[616px] rounded-common mx-auto md:max-w-7xl relative flex justify-center text-center flex-col py-16 md:py-0 px-10 md:px-0">
            <div class="absolute inset-0 bg-black opacity-20  rounded-common"></div>
            <div class="max-w-[900px] mx-auto text-center h-full md:mt-40">
                <h1 class="md:text-6xl text-4xl text-white opacity-bright font-extrabold font-heading md:leading-[73px] banner-title">{$settings['banner-title']}</h1>
            </div>
            <div class="pt-10 opacity-bright">
                <a href="{$settings['website_link']['url']}"><button class="cursor-pointer bg-button text-lg font-heading font-normal text-white px-10 py-2 rounded-2xl">{$settings['banner-button']}</button></a>
            </div>
        </div>
        <div
            class="md:max-w-6xl px-5 mx-auto flex flex-col text-center justify-center my-10 min-h-[342px] relative bg-[url('images/client-bg.svg')] bg-center bg-contain bg-no-repeat">
            <p class="banner-description font-heading md:text-2xl text-xl font-medium text-primary capitalize leading-[34px] ">{$settings['item_description']}</p>
            <author class="mt-7 md:text-2xl text-xl font-normal text-primary author"><i>{$settings['banner-author']}</i></author>
        </div>
</section>

HTML;
    }


}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \B2W_Banner_Widget());
