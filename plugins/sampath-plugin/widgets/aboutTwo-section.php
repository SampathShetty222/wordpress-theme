<?php
/*
About Two Section
*/
?>
<?php

class About_Two_Section_Widget extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'about_section_widget';
	}

	public function get_title()
	{
		return esc_html__('About Two Section', 'sampath-plugin');
	}

	public function get_icon()
	{
		return 'eicon-site-identity';
	}

	public function get_categories()
	{
		return ['b2w_category'];
	}

	public function get_keywords()
	{
		return ['Abot', 'Two', 'section', 'sampath', 'samtheme'];
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
			'about-title',
			[
				'label' => esc_html__('About Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Welcome to Easy Machines'),
				'placeholder' => esc_html__('Enter your About Title', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Title Typography', 'sampath-plugin'),
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .about-title',
			]
		);
		$this->add_responsive_control(
			'about_title_color',
			[
				'label' => esc_html__('About Title Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'about-subtitle',
			[
				'label' => esc_html__('About Sub Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Who We Are'),
				'placeholder' => esc_html__('Enter your Sub Title', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Sub Title Typography', 'sampath-plugin'),
				'name' => 'sub_title_typography',
				'selector' => '{{WRAPPER}} .about-subtitle',
			]
		);
		$this->add_responsive_control(
			'about_subtitle_color',
			[
				'label' => esc_html__('About Sub Title Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-subtitle' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'about-description',
			[
				'label' => esc_html__('About Description', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__("Easy Machines is your one-stop platform for renting and purchasing a wide range of equipment. Whether you're looking for heavy machinery, construction materials, spare parts, or even second-hand products, we've got you covered. With our user-friendly web app and mobile application, you can easily connect with vendors, franchise owners, and other users to find the equipment you need."),
				'placeholder' => esc_html__('Enter your About Description', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Description Typography', 'sampath-plugin'),
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .about-description',
			]
		);
		$this->add_responsive_control(
			'about_description_color',
			[
				'label' => esc_html__('About Description Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about-description' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'button-title',
			[
				'label' => esc_html__('button Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Welcome to Easy Machines'),
				'placeholder' => esc_html__('Enter your button Title', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Button Title Typography', 'sampath-plugin'),
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} .button-title',
			]
		);
		$this->add_responsive_control(
			'button_title_color',
			[
				'label' => esc_html__('Button Title Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .button-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'button_link',
			[
				'label' => esc_html__('Button Link', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '#call-to-action',
					'is_external' => true,
					'nofollow' => true,
				],
				'label_block' => true,
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
				'label' => esc_html__('Section Background', 'sampath-plugin'),
				'name' => 'background',
				'types' => ['classic', 'gradient', 'video'],
				'selector' => '{{WRAPPER}} .about-section-two',
			]
		);

		$this->add_control(
			'image-one',
			[
				'label' => esc_html__( 'Choose Image One', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'image-two',
			[
				'label' => esc_html__( 'Choose Image Two', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'image-three',
			[
				'label' => esc_html__( 'Choose Image Three', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		echo <<<HTML
<section class="w-[90vw] mx-auto md:py-[80px] py-[50px] scroll-mt-20 about-section-two" id="about">
        <div>
            <div class="md:grid grid-cols-2 gap-10">
                <div>
                    <p class="about-subtitle md:text-md text-base uppercase font-medium text-primary">{$settings['about-subtitle']}</p>
                    <h2 class="about-title md:text-5xl text-3xl font-bold md:leading-[50px] md:pb-5 pb-3">{$settings['about-title']}</h2>
                    <p class="about-description md:text-xl text-lg text-[#475467]">{$settings['about-description']}</p>
                    <a href="{$settings['button_link']['url']}" class="hover:text-white"><button class='mt-5 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'>{$settings['button-title']}</button></a>
                </div>
                <div class="relative grid place-items-center aboutus md:mt-[-150px]">
                    <div class="md:w-[400px] md:ml-0 ml-[-10px] z-[100] border border-8 outline-8 border-white rounded-xl bg-white">
                        <img src="{$settings['image-one']['url']}" alt="No-image" class="rounded-xl md:mt-0 mt-5">
                    </div>
                    <div class="grid grid-cols-2 gap-3 mt-[-130px] z-0">
                        <img src="{$settings['image-two']['url']}" alt="No-image" class="border border-[5px] border-white rounded-xl">
                        <img src="{$settings['image-three']['url']}" alt="No-image" class="border border-[5px] border-white rounded-xl">
                    </div>
                </div>
            </div>
        </div>
</section>
HTML;
	}
}

//Register widgets

\Elementor\plugin::instance()->widgets_manager->register_widget_type(new \About_Two_Section_Widget());
