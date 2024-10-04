<?php 
/*
CTA - SECTION
*/
?>
<?php

class Cta_Section_Widgets extends \Elementor\Widget_Base {

    public function get_name() {
        return 'Cta-Section';
    }

    public function get_title() {
        return esc_html__( 'CTA Section', 'sampath-plugin' );
    }

    public function get_icon() {
        return 'eicon-editor-list-ol';
    }

    public function get_categories() {
        return [ 'b2w_category' ];
    }

    public function get_keywords() {
        return['Cta','sampath', 'Contact','form','plugin'];
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
			'item_description',
			[
				'label' => esc_html__( 'Description', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Whether you have a question, a suggestion, or just want to say hello, this is the place to do it. Please fill out the form below with your details and message, and well get back to you as soon as possible.', 'sampath-plugin' ),
				'placeholder' => esc_html__( 'Type your description here', 'sampath-plugin' ),
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .cta-description',
			]
		);
        $this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'sampath-plugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta-description' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
            'shortcode_input',
            [
                'label' => esc_html__( 'Shortcode', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
                'placeholder' => esc_html__( '[your_shortcode]', 'sampath-plugin' ),
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
			'Company_details',
			[
				'label' => esc_html__( 'Company Details', 'sampath-plugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Our Office', 'sampath-plugin' ),
                'placeholder' => esc_html__( 'Enter the title', 'sampath-plugin' ),
            ]
            );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'details_typography',
                'selector' => '{{WRAPPER}} .company-details',
            ]
        );
        $this->add_control(
            'company_details_color',
            [
                'label' => esc_html__( 'Heading Color', 'sampath-plugin' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .company-details' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'office-list',
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
                            'name' => 'list_icon',
                            'label' => esc_html__( 'Icon', 'sampath-plugin'),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'default' => [
                                'value' => 'fas fa-check',
                                'library' => 'solid',
                            ],
                        ]
                    ],
                    'default' => [
                        [
                            'list_title' => esc_html__( 'Office Location', 'sampath-plugin' ),
                            'list_content' => esc_html__('#3, 1st Cross, SG Palya, Venkateshwara Layout,Bengaluru - 560029. INDIA' , 'sampath-plugin' ),
                        ],
                        [
                            'list_title' => esc_html__( 'Send a Message', 'sampath-plugin' ),
                            'list_content' => esc_html__('sampath@zysk.tech' , 'sampath-plugin' ),
                        ],
                        [
                            'list_title' => esc_html__( 'Call Us Directly', 'sampath-plugin' ),
                            'list_content' => esc_html__('+91 88614455222' , 'sampath-plugin' ),
                        ],
                    ],
                    'title_field' => '{{{ list_title }}}',
                ]
            );
        $this->end_controls_section();
    }

    protected function render(){
        $settings = $this -> get_settings_for_display();
        $shortcode_output = '';
            $shortcode_output = do_shortcode( $settings['shortcode_input'] );
        
echo <<<HTML
    <section class="md:px-[50px] px-[30px] py-[80px]">
        <p class="md:w-[70%] md:pb-0 pb-[20px] text-[#707070] cta-description">{$settings['item_description']}</p>
        <div class="md:flex md:pt-8">
            <div class="md:w-[70%]">
                <form>
                    {$shortcode_output}
                </form>
            </div>
            <div class="md:w-[30%]">
                <h4 class="text-lg font-medium company-details">{$settings['title']}</h4>
HTML;
if( $settings['office-list'] ){
    foreach( $settings['office-list'] as $items){
echo <<<HTML
        <div class="md:pt-5 pt-5">
            <h5 class="text-[16px] font-medium pb-2 list-heading"><i class="text-[16px] pe-3 text-[#71ca00] {$items['list_icon']['value']}"></i>{$items['list_title']}</h5>
            <p class="text-[15px] text-[#707070]">{$items['list_content']}</p>
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
// Register
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Cta_Section_Widgets() );