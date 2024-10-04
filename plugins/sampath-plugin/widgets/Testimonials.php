<?php 

/*
Testimonials Widgets
*/

?>

<?php 

class Testimonials_Widgets_Section extends \Elementor\Widget_Base{

    public function get_name() {
        return 'Testimonials-Section';
    }

    public function get_title() {
        return esc_html__( 'Testimonial Section', 'sampath-plugin' );
    }

    public function get_icon() {
        return 'eicon-testimonial-carousel';
    }

    public function get_categories() {
        return [ 'b2w_category' ];
    }

    public function get_keywords() {
        return['Testimonials','sampath' ,'client','happy','scrool'];
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
            'Testimonial_title',
			[
				'label' => esc_html__( 'Title', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Happy Customers', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your title here', 'sampath-plugin' ),
			]
            );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .testimonial-heading',
			]
		);
        $this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial-heading' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'Testimonial_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Testimonials', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your subtilte here', 'sampath-plugin' ),
			]
            );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subheading_typography',
				'selector' => '{{WRAPPER}} .testimonial-subheading',
			]
		);
        $this->add_control(
			'subtext_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial-subheading' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'Testimonial_sidetitle',
			[
				'label' => esc_html__( 'Side Title', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'More Testimonials', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your sidetilte here', 'sampath-plugin' ),
			]
            );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sideheading_typography',
				'selector' => '{{WRAPPER}} .side-title',
			]
		);
        $this->add_control(
			'sidetext_color',
			[
				'label' => esc_html__( 'Side Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial-sideheading' => 'color: {{VALUE}}',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
			'Client_Content',
			[
				'label' => esc_html__( 'Client Content', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'client-list',
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
						'name' => 'list_subtitle',
						'label' => esc_html__( 'Sub Title', 'sampath-plugin' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Sub Title' , 'sampath-plugin' ),
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
						'list_title' => esc_html__( 'Michael S.', 'sampath-plugin' ),
                        'list_subtitle' => esc_html__( 'Developer' , 'sampath-plugin' ),
						'list_content' => esc_html__( 'Switching to an electric vehicle has been a game-changer for me. Not only am I saving money on fuel, but the smooth and silent ride has made commuting a pleasure.', 'sampath-plugin' ),
					],
                    [
						'list_title' => esc_html__( 'Michael S.', 'sampath-plugin' ),
                        'list_subtitle' => esc_html__( 'Developer' , 'sampath-plugin' ),
						'list_content' => esc_html__( 'Switching to an electric vehicle has been a game-changer for me. Not only am I saving money on fuel, but the smooth and silent ride has made commuting a pleasure.', 'sampath-plugin' ),
					],
                    [
						'list_title' => esc_html__( 'Michael S.', 'sampath-plugin' ),
                        'list_subtitle' => esc_html__( 'Developer' , 'sampath-plugin' ),
						'list_content' => esc_html__( 'Switching to an electric vehicle has been a game-changer for me. Not only am I saving money on fuel, but the smooth and silent ride has made commuting a pleasure.', 'sampath-plugin' ),
					]
				],
				'title_field' => '{{{ list_title }}}',
			]
		);


        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this -> get_settings_for_display();
echo <<<HTML
    <section class="md:px-[50px] px-[30px] pt-[80px]">
    <div>
        <div class="grid grid-cols-2">
            <div>
                <p class="bg-[#f4f4f4] text-black w-fit px-5 py-2 rounded-3xl testimonial-subheading">{$settings['Testimonial_subtitle']}</p>
                <h1 class="md:text-[48px] md:leading-[58px] text-[38px] leading-[48px] font-bold pt-5 testimonial-heading">{$settings['Testimonial_title']}</h1>
            </div>
            <div class="grid place-items-end">
                <p class="text-[#212529] text-[16px] font-bold pb-[15px] side-title">{$settings['Testimonial_sidetitle']} <span class="text-[#71ca00] font-bold text-[20px]">></span></p>
            </div>
        </div>
    </div>
</section>
<section class="pt-[50px] pb-[80px] max-w-full">
    <div class="flex overflow-x-auto gap-10 cursor-pointer touch-auto top-picks-scroll">
HTML;
        if($settings['client-list']){
            foreach($settings['client-list'] as $items){
echo <<<HTML
    <div class="w-full">
            <div class="w-[300px] border rounded-2xl p-7">
				<div>
					<img src="{$items['list_image']['url']}" alt="No-image"  width="65px" height="65px">
				</div>
				<h5 class="text-[20px] font-bold pt-3">{$items['list_title']}</h5>
				<p class="text-[14px] text-[#707070] font-medium">{$items['list_subtitle']}</p>
				<p class="pt-3">{$items['list_content']}</p>
			</div>
			</div>
HTML;
            }
        }
echo <<<HTML
    </div>
</section>

HTML;
    }
}


//Registration

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Testimonials_Widgets_Section());