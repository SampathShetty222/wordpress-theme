<?php

/*
Discover Section Widgets
*/

?>

<?php

class Discover_Section_Widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'Discover-Section';
	}

	public function get_title()
	{
		return esc_html__('Discover Section', 'sampath-plugin');
	}

	public function get_icon()
	{
		return 'eicon-testimonial-carousel';
	}

	public function get_categories()
	{
		return ['b2w_category'];
	}

	public function get_keywords()
	{
		return ['Discover', 'sampath', 'client', 'happy', 'scrool'];
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
			'discover-heading',
			[
				'label' => esc_html__('Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Discover Our Second-Hand Market', 'sampath-plugin'),
				'placeholder' => esc_html__('Type your title here', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .discover-heading',
			]
		);
		$this->add_control(
			'text_color',
			[
				'label' => esc_html__('Heading Text Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .discover-heading' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'left-image',
			[
				'label' => esc_html__( 'Left Side Image', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'Client_Content',
			[
				'label' => esc_html__('List Content', 'sampath-plugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'discover-list',
			[
				'label' => esc_html__('Discover List', 'sampath-plugin'),
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
						'name' => 'list_icon',
						'label' => esc_html__('Icons', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::ICON,
					],
					[
						'name' => 'list_color',
						'label' => esc_html__('Color', 'sampath-plugin'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					],
					[	
						'name'=> 'list-icon',
						'label' => esc_html__( 'Icon', 'sampath-plugin' ),
						'type' => \Elementor\Controls_Manager::ICONS,
						'default' => [
								'value' => 'fas fa-star',
								'library' => 'fa-solid',
							],
					],
				],
				'default' => [
					[
						'list_title' => esc_html__('Affordable Equipment and Materials', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('Wide Range of Used Products', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('Quality Equipment and Materials', 'sampath-plugin'),
					],
					[
						'list_title' => esc_html__('User-Sourced Deals', 'sampath-plugin'),
					]
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'Button_Content',
			[
				'label' => esc_html__('Button', 'sampath-plugin'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'button-heading',
			[
				'label' => esc_html__('Button Title', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Browse Second-Hand Listings', 'sampath-plugin'),
				'placeholder' => esc_html__('Type Btton Title here', 'sampath-plugin'),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_heading_typography',
				'selector' => '{{WRAPPER}} .button-heading',
			]
		);
		$this->add_control(
			'button_text_color',
			[
				'label' => esc_html__('Heading Text Color', 'sampath-plugin'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .button-heading' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'button_link',
			[
			  'label' => __('Button Link', 'sampath-plugin'),
			  'type' => \Elementor\Controls_Manager::URL,
			  'show_external' => true,
			  'default' => [
				'url' => '#',
				'is_external' => true,
				'nofollow' => false
			  ],
			]
		  );
		$this->add_control(
			'padding',
			[
				'label' => esc_html__( 'Padding', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 3,
					'right' => 5,
					'bottom' => 3,
					'left' => 5,
					'unit' => 'rem',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .button-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'margin',
			[
				'label' => esc_html__( 'Margin', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 3,
					'right' => 5,
					'bottom' => 3,
					'left' => 5,
					'unit' => 'rem',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .button-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		echo <<<HTML
		<section class="grid md:grid-cols-2 md:scroll-mt-20" id="mission">
			<div class="md:py-[100px] md:pl-[50px] md:me-[-80px] z-[10] md:order-1 order-2">
				<img src="{$settings['left-image']['url']}" alt="no-image" class="md:border-[20px] md:border-white md:rounded-xl md:px-0 px-5 md:mt-0 mt-[-15px]">
			</div>                   
			<div class="discover-left-image  relative md:order-2 order-1 md:pt-0 md:pt-[30px]">
				<div class="absolute inset-0 bg-gray-200 md:opacity-95 opacity-0"></div>
				<div class="md:absolute md:left-[120px] md:top-[170px] md:py-0 py-7 md:px-0 px-[20px]">
					<h3 class="md:text-5xl text-3xl font-bold mb-3 discover-heading">{$settings['discover-heading']}</h3>
					<ul class="vision text-xl pt-3">   
HTML;
					if ($settings['discover-list']) {
					foreach ($settings['discover-list'] as $index => $values) {
echo <<<HTML
					<li class="pb-3 font-normal"><i class="{$values['list-icon']['value']} text-[#FECA1F] pe-3"></i>{$values['list_title']}</li>
HTML;
			}
		}
echo <<<HTML
                	</ul>
					<button class='mt-6 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300 button-heading' id="openModal"><a href="{$settings['button_link']['url']}">{$settings['button-heading']}</a></button>
				</div>
			</div>
		</section>
HTML;
	}
}

//Registration

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Discover_Section_Widget());