<?php
/*
 How It Is Works Section
*/
?>
<?php

class How_It_Is_Woks_Section_Widgets extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'How_It_Is_Works_Section';
	}

	public function get_title()
	{
		return esc_html__('How It Is Works Section', 'sampath-plugin');
	}

	public function get_icon()
	{
		return 'eicon-slideshow';
	}

	public function get_categories()
	{
		return ['b2w_category'];
	}

	public function get_keywords()
	{
		return ['List', 'sampath', 'Electric', 'drive', 'why choose us'];
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
			'main-title',
			[
				'label' => esc_html__('Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('How Easy Machines Works', 'sampath-plugin'),
				'placeholder' => esc_html__('Type your title here', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Title Typography', 'sampath-plugin'),
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .main-title',
			]
		);
		$this->add_control(
			'text_color',
			[
				'label' => esc_html__('Title Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'List_section_one',
			[
				'label' => esc_html__('Left Side Content', 'sampath-plugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'box-one-text',
			[
				'label' => esc_html__('Box One Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('years of experience', 'sampath-plugin'),
				'placeholder' => esc_html__('Type your Box One title here', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('One Title Typography', 'sampath-plugin'),
				'name' => 'list_heading_typography',
				'selector' => '{{WRAPPER}} .box-one-text',
			]
		);
		$this->add_control(
			'box-one-text-color',
			[
				'label' => esc_html__('Box One Text Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .box-one-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'box-one-number',
			[
				'label' => esc_html__('Box One Number', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 1000,
				'step' => 5,
				'default' => 20,
			]
		);
		$this->add_control(
			'Padding',
			[
				'label' => esc_html__('Padding', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'default' => [
					'top' => 8,
					'right' => 4,
					'bottom' => 8,
					'left' => 4,
					'unit' => 'rem',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .box-one' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'=> esc_html__('Left Side Main Image','sampath-plugin'),
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .left-side-section',
			]
		);

		$this->add_control(
			'box-two-text',
			[
				'label' => esc_html__('Box Two Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Happy Clients', 'sampath-plugin'),
				'placeholder' => esc_html__('Type your Box two title here', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Two Title Typography', 'sampath-plugin'),
				'name' => 'list_heading_typography',
				'selector' => '{{WRAPPER}} .box-two-text',
			]
		);
		$this->add_control(
			'box-two-text-color',
			[
				'label' => esc_html__('Box two Text Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .box-two-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'box-two-number',
			[
				'label' => esc_html__('Box two Number', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 1000,
				'step' => 5,
				'default' => 1,
			]
		);
		$this->add_control(
			'box-two-prefix',
			[
				'label' => esc_html__('Box two Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('K', 'sampath-plugin'),
				'placeholder' => esc_html__('prefix', 'sampath-plugin'),
			]
		);
		$this->add_control(
			'Padding-two',
			[
				'label' => esc_html__('Padding Box Two', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'default' => [
					'top' => 3,
					'right' => 10,
					'bottom' => 3,
					'left' => 10,
					'unit' => 'rem',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .box-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'Right Side Section',
			[
				'label' => esc_html__('Right Section Content', 'sampath-plugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'right-title-text',
			[
				'label' => esc_html__('Right Title One', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('For Vendors', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Title One Typography', 'sampath-plugin'),
				'name' => 'list_heading_typography',
				'selector' => '{{WRAPPER}} .right-title-text',
			]
		);
		$this->add_control(
			'right-title-text-color',
			[
				'label' => esc_html__('Right Title Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .right-title-text' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'first-list-content',
			[
				'label' => esc_html__('First Title List', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__('Title', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__('Title', 'sampath-plugin'),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__('Content', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__('Description', 'sampath-plugin'),
						'show_label' => false,
					],
					[
						'name' => 'list_heading_color',
						'label' => esc_html__('Heading Color', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					],
					[
						'name' => 'list_description_color',
						'label' => esc_html__('Description Color', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					]
				],
				'default' => [
					[
						'list_title' => esc_html__('Register Your Business:', 'sampath-plugin'),
						'list_content' => esc_html__('Sign up and create your vendor profile.', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('List Your Products', 'sampath-plugin'),
						'list_content' => esc_html__('Add your equipment, construction materials, spare parts, and franchise offerings for rent or sale.', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('Connect with Customers:', 'sampath-plugin'),
						'list_content' => esc_html__('Reach a wide audience and manage your listings easily.', 'sampath-plugin'),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

		$this->add_control(
			'right-title-text-two',
			[
				'label' => esc_html__('Right Title Two', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('For Customers', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'label' => esc_html__('Title Two Typography', 'sampath-plugin'),
				'name' => 'list_heading_typography',
				'selector' => '{{WRAPPER}} .right-title-text-two',
			]
		);
		$this->add_control(
			'right-title-two-color',
			[
				'label' => esc_html__('Right Title Two Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .right-title-text-two' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'second-list-content',
			[
				'label' => esc_html__('Second Title List', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__('Title', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__('Title', 'sampath-plugin'),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__('Content', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__('Description', 'sampath-plugin'),
						'show_label' => false,
					],
					[
						'name' => 'list_heading_color',
						'label' => esc_html__('Heading Color', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					],
					[
						'name' => 'list_description_color',
						'label' => esc_html__('Description Color', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					]
				],
				'default' => [
					[
						'list_title' => esc_html__('BrowseListings:', 'sampath-plugin'),
						'list_content' => esc_html__('Explore a variety of equipment, construction materials, and parts from trusted vendors.', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('Select Your Needs:', 'sampath-plugin'),
						'list_content' => esc_html__('Choose to rent or purchase based on your requirements.', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__(' MakeaDeal:', 'sampath-plugin'),
						'list_content' => esc_html__('View quotations and finalise your vendor.', 'sampath-plugin'),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'Background Style',
			[
				'label' => esc_html__('Section Background', 'sampath-plugin'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'label' => esc_html__('Section Background', 'sampath-plugin'),
				'name' => 'section background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .how-it-is-works',
			]
		);

		$this->end_controls_section();

	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();

		echo <<<HTML
   <section class="md:flex bg-[url('/images/banner2.jpg')] bg-cover bg-center scroll-mt-20 how-it-is-works" id="machines-works">
        <div class="bg-[rgba(0,0,0,0.8)] md:px-[60px] px-5 md:py-[80px] py-[50px]">
            <div class="md:pb-[40px] pb-5">
                <h2 class="main-title md:text-5xl text-3xl font-bold text-white">{$settings['main-title']}</h2>
            </div>
            <div class="md:flex relative gap-28">
                <div class="left-side-section md:min-w-[433px] md:h-[342px]">
                    <div class="bg-[#F0F0F0] px-6 md:py-8 py-4 rounded-[11px] w-[163px] max-h-[165px] box-one">
                        <h4 class="text-[50px]">{$settings['box-one-number']}{$settings['box-one-prefix']}</h4>
                        <p class="text-[11px] font-normal box-one-text">{$settings['box-one-text']}</p>
                    </div>
                    <div class="box-two bg-[#F0F0F0] px-10 md:py-3 py-4 rounded-[11px] absolute md:left-[250px] max-w-[182px] md:top-[230px] top-[0px] left-[180px] md:block hidden">
                        <h4 class="text-[50px] text-black">{$settings['box-two-number']}{$settings['box-two-prefix']} +</h4>
                        <p class="text-[11px] text-black font-normal box-two-text">{$settings['box-two-text']}</p>
                    </div>
                </div>
                <div class="">
                    <div class="md:flex gap-16 pb-10 pt-10 md:pt-0 items-center">
                        <h4 class="uppercase text-lg font-semibold text-[#feca1f] pb-3 right-title-text">{$settings['right-title-text']} <i class="fa-solid fa-arrow-right bg-clip-text text-transparent bg-gradient-to-r from-[#feca1f] to-white"></i></h4>
                        <div>
HTML;
		if ($settings['first-list-content']) {
			foreach ($settings['first-list-content'] as $index => $values) {
				$count = $index + 1;
				echo <<<HTML
	<div class="md:pb-3">
		<h6 class="font-semibold text-base text-white font-normal">{$count}.{$values['list_title']}</h6>
		<p class="font-normal text-base text-[#dbdbdb] font-normal"> {$values['list_content']}</p>
	</div>
HTML;
			}
			echo <<<HTML
                        </div>
                    </div>
                    <div class="md:flex grid md:gap-16 items-center">
                        <div class="order-2 md:order-1">
HTML;
			if ($settings['second-list-content']) {
				foreach ($settings['second-list-content'] as $index => $values) {
					$count = $index + 1;
					echo <<<HTML
		<div class="md:pb-3">
			<h6 class="font-semibold text-base text-white font-normal">{$count}.{$values['list_title']}</h6>
			<p class="font-normal text-base text-[#dbdbdb] font-normal">{$values['list_content']}</p>
		</div>
HTML;
				}
			}
			echo <<<HTML
                        </div>
                        <h4 class="right-title-text-two uppercase text-lg font-semibold text-[#feca1f] order-1 md:order-2 pb-3">{$settings['right-title-text-two']} <i class="fa-solid fa-arrow-left bg-clip-text text-transparent bg-gradient-to-r from-white to-[#feca1f]"></i></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>  
HTML;
		}
	}
}
//Registration
\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \How_It_Is_Woks_Section_Widgets());