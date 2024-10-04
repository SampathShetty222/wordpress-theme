<?php 
/*
 List Section
*/
?>
<?php

class List_Section_Widget extends \Elementor\Widget_Base {

        public function get_name() {
            return 'list-Section';
        }
    
        public function get_title() {
            return esc_html__( 'List Section', 'sampath-plugin' );
        }
    
        public function get_icon() {
            return 'eicon-editor-list-ol';
        }
    
        public function get_categories() {
            return [ 'b2w_category' ];
        }
    
        public function get_keywords() {
            return['List','sampath' , 'Electric','drive','why choose us'];
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
				'default' => esc_html__( 'For a Cleaner, and Brighter Future', 'sampath-plugin' ),
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
				'default' => esc_html__( 'Drive Electric', 'sampath-plugin' ),
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
				'selector' => '{{WRAPPER}} .why-choose-us',
			]
		);
		$this->end_controls_section();

        $this->start_controls_section(
			'List_section',
			[
				'label' => esc_html__( 'List Section', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
            'list-heading',
			[
				'label' => esc_html__( 'Heading', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Why choose us', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your title here', 'sampath-plugin' ),
			]
            );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'list_heading_typography',
				'selector' => '{{WRAPPER}} .list-heading',
			]
		);
        $this->add_control(
			'list_text_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .list-heading' => 'color: {{VALUE}}',
				],
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
			'why-list',
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
						'list_title' => esc_html__( 'Longer Contract Tenure', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Opt for 7-10 year contracts to reduce monthly expenses.', 'sampath-plugin' ),
					],
					[
						'list_title' => esc_html__( 'Energy Cost Management', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Invest in efficient charging infrastructure to lower costs and charging time.', 'sampath-plugin' ),
					],
                    [
						'list_title' => esc_html__( 'Increased Daily Kilometers', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Schedule more trips to maximize bus usage and benefit from lower operational costs.', 'sampath-plugin' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
        

        $this->end_controls_section();

        $this->start_controls_section(
			'List_section Right',
			[
				'label' => esc_html__( 'List Section Two', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'why-list-two',
			[
				'label' => esc_html__( 'Repeater List', 'sampath-plugin' ),
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
						'list_title' => esc_html__( 'Longer Contract Tenure', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Opt for 7-10 year contracts to reduce monthly expenses.', 'sampath-plugin' ),
					],
					[
						'list_title' => esc_html__( 'Energy Cost Management', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Invest in efficient charging infrastructure to lower costs and charging time.', 'sampath-plugin' ),
					],
                    [
						'list_title' => esc_html__( 'Increased Daily Kilometers', 'sampath-plugin' ),
						'list_content' => esc_html__( 'Schedule more trips to maximize bus usage and benefit from lower operational costs.', 'sampath-plugin' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
        

        $this->end_controls_section();

	}
    protected function render() {
        $settings = $this -> get_settings_for_display();

        echo <<<HTML
<section class="why-choose-us py-[80px]">
    <div class="md:px-[50px] px-[30px]  grid md:grid-cols-3 gap-[20px]">
        <div class="md:pe-[30px]">
            <p class="bg-white text-black w-fit px-5 py-2 rounded-3xl subheading">{$settings['Sub_title']}</p>
            <h1 class="md:text-[48px] text-[38px] md:leading-[58px] leading-[42px]  font-bold leading-[60px] heading">{$settings['Main_title']}</h1>
        </div>
        <div>
            <h4 class="text-[20px] font-bold leading-[26px] pb-8 list-heading">{$settings['list-heading']}</h4>
HTML;

if ($settings['why-list']) {
    foreach ($settings['why-list'] as $index => $listItems) {
        $listNumber = $index + 1;
        echo <<<HTML
        <div class="flex gap-4 pb-8">
            <div class="w-[40px] h-[40px] bg-[#71ca00] rounded-[50%] px-4 grid place-items-center">
                <span class="text-white">{$listNumber}</span>
            </div>
            <div>
                <h5 class="text-[18px] font-medium mt-[-6px]">{$listItems['list_title']}</h5>
                <p class="text-[#707070]">{$listItems['list_content']}</p>
            </div>
        </div>
HTML;
    }
}   
echo <<<HTML
    </div>
	<div class="md:pt-8 md:mt-5 mt-[-20px]">
HTML;

if ($settings['why-list-two']) {
    foreach($settings['why-list-two'] as $index => $listItems) {
        $listNumber = $index + 1;
        echo <<<HTML
            <h4 class="text-[20px] font-bold leading-[26px]"></h4>
            <div class="flex gap-4 pb-8">
                <div class="w-[40px] h-[40px] bg-black rounded-[50%] px-4 grid place-items-center">
                    <span class="text-white">{$listNumber}</span>
                </div>
                <div>
                    <h5 class="text-[18px] font-medium mt-[-6px]">{$listItems['list_title']}</h5>
                    <p class="text-[#707070]">{$listItems['list_content']}</p>
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
//Registration
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \List_Section_Widget());