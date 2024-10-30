<?php


// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 *
 * Laamya elementor about page section widget.
 *
 * @since 1.0
 */
class Elementor_Ctw_Buttons extends \Elementor\Widget_Base
{


    public function get_name()
    {
        return 'ctw-buttons';
    }

    public function get_title()
    {
        return esc_html__('Whatsapp buttons', 'chat-help');
    }

    public function get_icon()
    {
        return 'eicon-headphones';
    }

    public function get_categories()
    {
        return ['ctw-elements'];
    }

    protected function _register_controls()
    {


        // ----------------------------------------  Ctw Buttons Settings ------------------------------

        $this->start_controls_section(
            'ctw__general__settings',
            [
                'label' => esc_html__('General settings', 'chat-help'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'number',
            [
                'label'     => esc_html__('Whatsapp number', 'chat-help'),
                'description' => esc_html__('Add your whatsapp number including country code. eg: +880123456189', 'chat-help'),
                'label_block' => false,
                'type'      => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => esc_html__('Style', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::SELECT,
                'label_block' => false,
                'default' => '1',
                'options' => array(
                    '1'  => esc_html__('Advanced button', 'chat-help'),
                    '2'  => esc_html__('Basic button', 'chat-help'),
                )

            ]
        );

        $this->add_control(
            'agent__photo',
            [
                'label' => esc_html__('Agent photo', 'chat-help'),
                'description' => esc_html__('Add agent photo to show in button.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::MEDIA,
                'label_block' => true,
                'default' => [
                    'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/user.webp',
                ],
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'agent__name',
            [
                'label' => esc_html__('Agent name', 'chat-help'),
                'description' => esc_html__('Write agent name to show in button.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('Robert', 'chat-help'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'agent__designation',
            [
                'label' => esc_html__('Agent designation', 'chat-help'),
                'description' => esc_html__('Write agent designation to show in button.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('Sales Support', 'chat-help'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'custom__button__label',
            [
                'label' => esc_html__('Button label', 'chat-help'),
                'description' => esc_html__('Add custom button label.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__('How can I help you?', 'chat-help'),
            ]
        );

        $this->add_control(
            'online__text',
            [
                'label' => esc_html__('Online badget text', 'chat-help'),
                'description' => esc_html__('Add custom badget text when user in online.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('I\'m avaiable', 'chat-help'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'offline__text',
            [
                'label' => esc_html__('Offline badget text', 'chat-help'),
                'description' => esc_html__('Add custom badget text when user in offline.', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('I\'m offline', 'chat-help'),
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->end_controls_section(); // End section top content


        $this->start_controls_section(
            'ctw__availablity__manager',
            [
                'label' => esc_html__('Chat settings', 'chat-help'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'style' => '1',
                ],
            ]
        );

        $this->add_control(
            'timezone',
            [
                'label' => esc_html__('Timezone', 'chat-help'),
                'description' => esc_html__('When using the date and time from the user browser you can transform it to your current timezone (in case your user is in a different timezone)', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => false,
                'default' => '1',
                'options' => array(
                    '1' => esc_html__('Select timezone', 'chat-help'),
                    'Africa/Abidjan' => esc_html__('Africa/Abidjan', 'chat-help'),
                    'Africa/Accra' => esc_html__('Africa/Accra', 'chat-help'),
                    'Africa/Addis_Ababa' => esc_html__('Africa/Addis_Ababa', 'chat-help'),
                    'Africa/Algiers' => esc_html__('Africa/Algiers', 'chat-help'),
                    'Africa/Asmara' => esc_html__('Africa/Asmara', 'chat-help'),
                    'Africa/Asmera' => esc_html__('Africa/Asmera', 'chat-help'),
                    'Africa/Bamako' => esc_html__('Africa/Bamako', 'chat-help'),
                    'Africa/Bangui' => esc_html__('Africa/Bangui', 'chat-help'),
                    'Africa/Banjul' => esc_html__('Africa/Banjul', 'chat-help'),
                    'Africa/Bissau' => esc_html__('Africa/Bissau', 'chat-help'),
                    'Africa/Blantyre' => esc_html__('Africa/Blantyre', 'chat-help'),
                    'Africa/Brazzaville' => esc_html__('Africa/Brazzaville', 'chat-help'),
                    'Africa/Bujumbura' => esc_html__('Africa/Bujumbura', 'chat-help'),
                    'Africa/Cairo' => esc_html__('Africa/Cairo', 'chat-help'),
                    'Africa/Casablanca' => esc_html__('Africa/Casablanca', 'chat-help'),
                    'Africa/Ceuta' => esc_html__('Africa/Ceuta', 'chat-help'),
                    'Africa/Conakry' => esc_html__('Africa/Conakry', 'chat-help'),
                    'Africa/Dakar' => esc_html__('Africa/Dakar', 'chat-help'),
                    'Africa/Dar_es_Salaam' => esc_html__('Africa/Dar_es_Salaam', 'chat-help'),
                    'Africa/Djibouti' => esc_html__('Africa/Djibouti', 'chat-help'),
                    'Africa/Douala' => esc_html__('Africa/Douala', 'chat-help'),
                    'Africa/El_Aaiun' => esc_html__('Africa/El_Aaiun', 'chat-help'),
                    'Africa/Freetown' => esc_html__('Africa/Freetown', 'chat-help'),
                    'Africa/Gaborone' => esc_html__('Africa/Gaborone', 'chat-help'),
                    'Africa/Harare' => esc_html__('Africa/Harare', 'chat-help'),
                    'Africa/Johannesburg' => esc_html__('Africa/Johannesburg', 'chat-help'),
                    'Africa/Juba' => esc_html__('Africa/Juba', 'chat-help'),
                    'Africa/Kampala' => esc_html__('Africa/Kampala', 'chat-help'),
                    'Africa/Khartoum' => esc_html__('Africa/Khartoum', 'chat-help'),
                    'Africa/Kigali' => esc_html__('Africa/Kigali', 'chat-help'),
                    'Africa/Kinshasa' => esc_html__('Africa/Kinshasa', 'chat-help'),
                    'Africa/Lagos' => esc_html__('Africa/Lagos', 'chat-help'),
                    'Africa/Libreville' => esc_html__('Africa/Libreville', 'chat-help'),
                    'Africa/Lome' => esc_html__('Africa/Lome', 'chat-help'),
                    'Africa/Luanda' => esc_html__('Africa/Luanda', 'chat-help'),
                    'Africa/Lubumbashi' => esc_html__('Africa/Lubumbashi', 'chat-help'),
                    'Africa/Lusaka' => esc_html__('Africa/Lusaka', 'chat-help'),
                    'Africa/Malabo' => esc_html__('Africa/Malabo', 'chat-help'),
                    'Africa/Maputo' => esc_html__('Africa/Maputo', 'chat-help'),
                    'Africa/Maseru' => esc_html__('Africa/Maseru', 'chat-help'),
                    'Africa/Mbabane' => esc_html__('Africa/Mbabane', 'chat-help'),
                    'Africa/Mogadishu' => esc_html__('Africa/Mogadishu', 'chat-help'),
                    'Africa/Monrovia' => esc_html__('Africa/Monrovia', 'chat-help'),
                    'Africa/Nairobi' => esc_html__('Africa/Nairobi', 'chat-help'),
                    'Africa/Ndjamena' => esc_html__('Africa/Ndjamena', 'chat-help'),
                    'Africa/Niamey' => esc_html__('Africa/Niamey', 'chat-help'),
                    'Africa/Nouakchott' => esc_html__('Africa/Nouakchott', 'chat-help'),
                    'Africa/Ouagadougou' => esc_html__('Africa/Ouagadougou', 'chat-help'),
                    'Africa/Porto-Novo' => esc_html__('Africa/Porto-Novo', 'chat-help'),
                    'Africa/Sao_Tome' => esc_html__('Africa/Sao_Tome', 'chat-help'),
                    'Africa/Timbuktu' => esc_html__('Africa/Timbuktu', 'chat-help'),
                    'Africa/Tripoli' => esc_html__('Africa/Tripoli', 'chat-help'),
                    'Africa/Tunis' => esc_html__('Africa/Tunis', 'chat-help'),
                    'Africa/Windhoek' => esc_html__('Africa/Windhoek', 'chat-help'),
                    'America/Adak' => esc_html__('America/Adak', 'chat-help'),
                    'America/Anchorage' => esc_html__('America/Anchorage', 'chat-help'),
                    'America/Anguilla' => esc_html__('America/Anguilla', 'chat-help'),
                    'America/Antigua' => esc_html__('America/Antigua', 'chat-help'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-help'),
                    'America/Argentina/Buenos_Aires' => esc_html__('America/Argentina/Buenos_Aires', 'chat-help'),
                    'America/Argentina/Catamarca' => esc_html__('America/Argentina/Catamarca', 'chat-help'),
                    'America/Argentina/ComodRivadavia' => esc_html__('America/Argentina/ComodRivadavia', 'chat-help'),
                    'America/Argentina/Cordoba' => esc_html__('America/Argentina/Cordoba', 'chat-help'),
                    'America/Argentina/Jujuy' => esc_html__('America/Argentina/Jujuy', 'chat-help'),
                    'America/Argentina/La_Rioja' => esc_html__('America/Argentina/La_Rioja', 'chat-help'),
                    'America/Argentina/Mendoza' => esc_html__('America/Argentina/Mendoza', 'chat-help'),
                    'America/Argentina/Rio_Gallegos' => esc_html__('America/Argentina/Rio_Gallegos', 'chat-help'),
                    'America/Argentina/Salta' => esc_html__('America/Argentina/Salta', 'chat-help'),
                    'America/Argentina/San_Juan' => esc_html__('America/Argentina/San_Juan', 'chat-help'),
                    'America/Argentina/San_Luis' => esc_html__('America/Argentina/San_Luis', 'chat-help'),
                    'America/Argentina/Tucuman' => esc_html__('America/Argentina/Tucuman', 'chat-help'),
                    'America/Argentina/Ushuaia' => esc_html__('America/Argentina/Ushuaia', 'chat-help'),
                    'America/Aruba' => esc_html__('America/Aruba', 'chat-help'),
                    'America/Asuncion' => esc_html__('America/Asuncion', 'chat-help'),
                    'America/Atikokan' => esc_html__('America/Atikokan', 'chat-help'),
                    'America/Atka' => esc_html__('America/Atka', 'chat-help'),
                    'America/Bahia' => esc_html__('America/Bahia', 'chat-help'),
                    'America/Bahia_Banderas' => esc_html__('America/Bahia_Banderas', 'chat-help'),
                    'America/Barbados' => esc_html__('America/Barbados', 'chat-help'),
                    'America/Belem' => esc_html__('America/Belem', 'chat-help'),
                    'America/Belize' => esc_html__('America/Belize', 'chat-help'),
                    'America/Blanc-Sablon' => esc_html__('America/Blanc-Sablon', 'chat-help'),
                    'America/Boa_Vista' => esc_html__('America/Boa_Vista', 'chat-help'),
                    'America/Bogota' => esc_html__('America/Bogota', 'chat-help'),
                    'America/Boise' => esc_html__('America/Boise', 'chat-help'),
                    'America/Buenos_Aires' => esc_html__('America/Buenos_Aires', 'chat-help'),
                    'America/Cambridge_Bay' => esc_html__('America/Cambridge_Bay', 'chat-help'),
                    'America/Campo_Grande' => esc_html__('America/Campo_Grande', 'chat-help'),
                    'America/Cancun' => esc_html__('America/Cancun', 'chat-help'),
                    'America/Caracas' => esc_html__('America/Caracas', 'chat-help'),
                    'America/Catamarca' => esc_html__('America/Catamarca', 'chat-help'),
                    'America/Cayenne' => esc_html__('America/Cayenne', 'chat-help'),
                    'America/Cayman' => esc_html__('America/Cayman', 'chat-help'),
                    'America/Chicago' => esc_html__('America/Chicago', 'chat-help'),
                    'America/Chihuahua' => esc_html__('America/Chihuahua', 'chat-help'),
                    'America/Coral_Harbour' => esc_html__('America/Coral_Harbour', 'chat-help'),
                    'America/Cordoba' => esc_html__('America/Cordoba', 'chat-help'),
                    'America/Costa_Rica' => esc_html__('America/Costa_Rica', 'chat-help'),
                    'America/Creston' => esc_html__('America/Creston', 'chat-help'),
                    'America/Cuiaba' => esc_html__('America/Cuiaba', 'chat-help'),
                    'America/Curacao' => esc_html__('America/Curacao', 'chat-help'),
                    'America/Danmarkshavn' => esc_html__('America/Danmarkshavn', 'chat-help'),
                    'America/Dawson' => esc_html__('America/Dawson', 'chat-help'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-help'),
                    'America/Denver' => esc_html__('America/Denver', 'chat-help'),
                    'America/Araguaina' => esc_html__('America/Araguaina', 'chat-help'),
                    'America/Dominica' => esc_html__('America/Dominica', 'chat-help'),
                    'America/Edmonton' => esc_html__('America/Edmonton', 'chat-help'),
                    'America/Eirunepe' => esc_html__('America/Eirunepe', 'chat-help'),
                    'America/El_Salvador' => esc_html__('America/El_Salvador', 'chat-help'),
                    'America/Ensenada' => esc_html__('America/Ensenada', 'chat-help'),
                    'America/Fort_Nelson' => esc_html__('America/Fort_Nelson', 'chat-help'),
                    'America/Fort_Wayne' => esc_html__('America/Fort_Wayne', 'chat-help'),
                    'America/Fortaleza' => esc_html__('America/Fortaleza', 'chat-help'),
                    'America/Glace_Bay' => esc_html__('America/Glace_Bay', 'chat-help'),
                    'America/Godthab' => esc_html__('America/Godthab', 'chat-help'),
                    'America/Goose_Bay' => esc_html__('America/Goose_Bay', 'chat-help'),
                    'America/Grand_Turk' => esc_html__('America/Grand_Turk', 'chat-help'),
                    'America/Grenada' => esc_html__('America/Grenada', 'chat-help'),
                    'America/Guadeloupe' => esc_html__('America/Guadeloupe', 'chat-help'),
                    'America/Guatemala' => esc_html__('America/Guatemala', 'chat-help'),
                    'America/Guayaquil' => esc_html__('America/Guayaquil', 'chat-help'),
                    'America/Guyana' => esc_html__('America/Guyana', 'chat-help'),
                    'America/Halifax' => esc_html__('America/Halifax', 'chat-help'),
                    'America/Havana' => esc_html__('America/Havana', 'chat-help'),
                    'America/Hermosillo' => esc_html__('America/Hermosillo', 'chat-help'),
                    'America/Indiana/Indianapolis' => esc_html__('Indiana/Indianapolis', 'chat-help'),
                    'America/Indiana/Knox' => esc_html__('America/Indiana/Knox', 'chat-help'),
                    'America/Indiana/Marengo' => esc_html__('America/Indiana/Marengo', 'chat-help'),
                    'America/Indiana/Petersburg' => esc_html__('America/Indiana/Petersburg', 'chat-help'),
                    'America/Indiana/Tell_City' => esc_html__('America/Indiana/Tell_City', 'chat-help'),
                    'America/Indiana/Vevay' => esc_html__('America/Indiana/Vevay', 'chat-help'),
                    'America/Indiana/Vincennes' => esc_html__('America/Indiana/Vincennes', 'chat-help'),
                    'America/Indiana/Winamac' => esc_html__('America/Indiana/Winamac', 'chat-help'),
                    'America/Indianapolis' => esc_html__('America/Indianapolis', 'chat-help'),
                    'America/Inuvik' => esc_html__('America/Inuvik', 'chat-help'),
                    'America/Iqaluit' => esc_html__('America/Iqaluit', 'chat-help'),
                    'America/Jamaica' => esc_html__('America/Jamaica', 'chat-help'),
                    'America/Jujuy' => esc_html__('America/Jujuy', 'chat-help'),
                    'America/Juneau' => esc_html__('America/Juneau', 'chat-help'),
                    'America/Kentucky/Louisville' => esc_html__('America/Kentucky/Louisville', 'chat-help'),
                    'America/Kentucky/Monticello' => esc_html__('America/Kentucky/Monticello', 'chat-help'),
                    'America/Knox_IN' => esc_html__('America/Knox_IN', 'chat-help'),
                    'America/Kralendijk' => esc_html__('America/Kralendijk', 'chat-help'),
                    'America/La_Paz' => esc_html__('America/La_Paz', 'chat-help'),
                    'America/Lima' => esc_html__('America/Lima', 'chat-help'),
                    'America/Los_Angeles' => esc_html__('America/Los_Angeles', 'chat-help'),
                    'America/Louisville' => esc_html__('America/Louisville', 'chat-help'),
                    'America/Lower_Princes' => esc_html__('America/Lower_Princes', 'chat-help'),
                    'America/Maceio' => esc_html__('America/Maceio', 'chat-help'),
                    'America/Managua' => esc_html__('America/Managua', 'chat-help'),
                    'America/Manaus' => esc_html__('America/Manaus', 'chat-help'),
                    'America/Marigot' => esc_html__('America/Marigot', 'chat-help'),
                    'America/Martinique' => esc_html__('America/Martinique', 'chat-help'),
                    'America/Matamoros' => esc_html__('America/Matamoros', 'chat-help'),
                    'America/Mazatlan' => esc_html__('America/Mazatlan', 'chat-help'),
                    'America/Mendoza' => esc_html__('America/Mendoza', 'chat-help'),
                    'America/Menominee' => esc_html__('America/Menominee', 'chat-help'),
                    'America/Merida' => esc_html__('America/Merida', 'chat-help'),
                    'America/Metlakatla' => esc_html__('America/Metlakatla', 'chat-help'),
                    'America/Mexico_City' => esc_html__('America/Mexico_City', 'chat-help'),
                    'America/Miquelon' => esc_html__('America/Miquelon', 'chat-help'),
                    'America/Moncton' => esc_html__('America/Moncton', 'chat-help'),
                    'America/Monterrey' => esc_html__('America/Monterrey', 'chat-help'),
                    'America/Montevideo' => esc_html__('America/Montevideo', 'chat-help'),
                    'America/Montreal' => esc_html__('America/Montreal', 'chat-help'),
                    'America/Montserrat' => esc_html__('America/Montserrat', 'chat-help'),
                    'America/Nassau' => esc_html__('America/Nassau', 'chat-help'),
                    'America/New_York' => esc_html__('America/New_York', 'chat-help'),
                    'America/Nipigon' => esc_html__('America/Nipigon', 'chat-help'),
                    'America/Nome' => esc_html__('America/Nome', 'chat-help'),
                    'America/Noronha' => esc_html__('America/Noronha', 'chat-help'),
                    'America/North_Dakota/Beulah' => esc_html__('America/North_Dakota/Beulah', 'chat-help'),
                    'America/North_Dakota/Center' => esc_html__('America/North_Dakota/Center', 'chat-help'),
                    'America/North_Dakota/New_Salem' => esc_html__('America/North_Dakota/New_Salem', 'chat-help'),
                    'America/Ojinaga' => esc_html__('America/Ojinaga', 'chat-help'),
                    'America/Panama' => esc_html__('America/Panama', 'chat-help'),
                    'America/Pangnirtung' => esc_html__('America/Pangnirtung', 'chat-help'),
                    'America/Paramaribo' => esc_html__('America/Paramaribo', 'chat-help'),
                    'America/Phoenix' => esc_html__('America/Phoenix', 'chat-help'),
                    'America/Port-au-Prince' => esc_html__('America/Port-au-Prince', 'chat-help'),
                    'America/Port_of_Spain' => esc_html__('America/Port_of_Spain', 'chat-help'),
                    'America/Porto_Acre' => esc_html__('America/Porto_Acre', 'chat-help'),
                    'America/Porto_Velho' => esc_html__('America/Porto_Velho', 'chat-help'),
                    'America/Puerto_Rico' => esc_html__('America/Puerto_Rico', 'chat-help'),
                    'America/Punta_Arenas' => esc_html__('America/Punta_Arenas', 'chat-help'),
                    'America/Rainy_River' => esc_html__('America/Rainy_River', 'chat-help'),
                    'America/Rankin_Inlet' => esc_html__('America/Rankin_Inlet', 'chat-help'),
                    'America/Recife' => esc_html__('America/Recife', 'chat-help'),
                    'America/Regina' => esc_html__('America/Regina', 'chat-help'),
                    'America/Resolute' => esc_html__('America/Resolute', 'chat-help'),
                    'America/Rio_Branco' => esc_html__('America/Rio_Branco', 'chat-help'),
                    'America/Rosario' => esc_html__('America/Rosario', 'chat-help'),
                    'America/Santa_Isabel' => esc_html__('America/Santa_Isabel', 'chat-help'),
                    'America/Santarem' => esc_html__('America/Santarem', 'chat-help'),
                    'America/Santiago' => esc_html__('America/Santiago', 'chat-help'),
                    'America/Santo_Domingo' => esc_html__('America/Santo_Domingo', 'chat-help'),
                    'America/Sao_Paulo' => esc_html__('America/Sao_Paulo', 'chat-help'),
                    'America/Scoresbysund' => esc_html__('America/Scoresbysund', 'chat-help'),
                    'America/Shiprock' => esc_html__('America/Shiprock', 'chat-help'),
                    'America/Sitka' => esc_html__('America/Sitka', 'chat-help'),
                    'America/St_Barthelemy' => esc_html__('America/St_Barthelemy', 'chat-help'),
                    'America/St_Johns' => esc_html__('America/St_Johns', 'chat-help'),
                    'America/St_Kitts' => esc_html__('America/St_Kitts', 'chat-help'),
                    'America/St_Lucia' => esc_html__('America/St_Lucia', 'chat-help'),
                    'America/St_Thomas' => esc_html__('America/St_Thomas', 'chat-help'),
                    'America/St_Vincent' => esc_html__('America/St_Vincent', 'chat-help'),
                    'America/Swift_Current' => esc_html__('America/Swift_Current', 'chat-help'),
                    'America/Tegucigalpa' => esc_html__('America/Tegucigalpa', 'chat-help'),
                    'America/Thule' => esc_html__('America/Thule', 'chat-help'),
                    'America/Thunder_Bay' => esc_html__('America/Thunder_Bay', 'chat-help'),
                    'America/Tijuana' => esc_html__('America/Tijuana', 'chat-help'),
                    'America/Toronto' => esc_html__('America/Toronto', 'chat-help'),
                    'America/Tortola' => esc_html__('America/Tortola', 'chat-help'),
                    'America/Vancouver' => esc_html__('America/Vancouver', 'chat-help'),
                    'America/Virgin' => esc_html__('America/Virgin', 'chat-help'),
                    'America/Whitehorse' => esc_html__('America/Whitehorse', 'chat-help'),
                    'America/Winnipeg' => esc_html__('America/Winnipeg', 'chat-help'),
                    'America/Yakutat' => esc_html__('America/Yakutat', 'chat-help'),
                    'America/Yellowknife' => esc_html__('America/Yellowknife', 'chat-help'),
                    'Antarctica/Casey' => esc_html__('Antarctica/Casey', 'chat-help'),
                    'Antarctica/Davis' => esc_html__('Antarctica/Davis', 'chat-help'),
                    'Antarctica/DumontDUrville' => esc_html__('Antarctica/DumontDUrville', 'chat-help'),
                    'Antarctica/Macquarie' => esc_html__('Antarctica/Macquarie', 'chat-help'),
                    'Antarctica/Mawson' => esc_html__('Antarctica/Mawson', 'chat-help'),
                    'Antarctica/McMurdo' => esc_html__('Antarctica/McMurdo', 'chat-help'),
                    'Antarctica/Palmer' => esc_html__('Antarctica/Palmer', 'chat-help'),
                    'Antarctica/Rothera' => esc_html__('Antarctica/Rothera', 'chat-help'),
                    'Antarctica/South_Pole' => esc_html__('Antarctica/South_Pole', 'chat-help'),
                    'Antarctica/Syowa' => esc_html__('Antarctica/Syowa', 'chat-help'),
                    'Antarctica/Troll' => esc_html__('Antarctica/Troll', 'chat-help'),
                    'Antarctica/Vostok' => esc_html__('Antarctica/Vostok', 'chat-help'),
                    'Arctic/Longyearbyen' => esc_html__('Arctic/Longyearbyen', 'chat-help'),
                    'Asia/Aden' => esc_html__('Asia/Aden', 'chat-help'),
                    'Asia/Almaty' => esc_html__('Asia/Almaty', 'chat-help'),
                    'Asia/Amman' => esc_html__('Asia/Amman', 'chat-help'),
                    'Asia/Anadyr' => esc_html__('Asia/Anadyr', 'chat-help'),
                    'Asia/Aqtau' => esc_html__('Asia/Aqtau', 'chat-help'),
                    'Asia/Aqtobe' => esc_html__('Asia/Aqtobe', 'chat-help'),
                    'Asia/Ashgabat' => esc_html__('Asia/Ashgabat', 'chat-help'),
                    'Asia/Ashkhabad' => esc_html__('Asia/Ashkhabad', 'chat-help'),
                    'Asia/Atyrau' => esc_html__('Asia/Atyrau', 'chat-help'),
                    'Asia/Baghdad' => esc_html__('Asia/Baghdad', 'chat-help'),
                    'Asia/Bahrain' => esc_html__('Asia/Bahrain', 'chat-help'),
                    'Asia/Baku' => esc_html__('Asia/Baku', 'chat-help'),
                    'Asia/Bangkok' => esc_html__('Asia/Bangkok', 'chat-help'),
                    'Asia/Barnaul' => esc_html__('Asia/Barnaul', 'chat-help'),
                    'Asia/Beirut' => esc_html__('Asia/Beirut', 'chat-help'),
                    'Asia/Bishkek' => esc_html__('Asia/Bishkek', 'chat-help'),
                    'Asia/Brunei' => esc_html__('Asia/Brunei', 'chat-help'),
                    'Asia/Calcutta' => esc_html__('Asia/Calcutta', 'chat-help'),
                    'Asia/Chita' => esc_html__('Asia/Chita', 'chat-help'),
                    'Asia/Choibalsan' => esc_html__('Asia/Choibalsan', 'chat-help'),
                    'Asia/Chongqing' => esc_html__('Asia/Chongqing', 'chat-help'),
                    'Asia/Chungking' => esc_html__('Asia/Chungking', 'chat-help'),
                    'Asia/Colombo' => esc_html__('Asia/Colombo', 'chat-help'),
                    'Asia/Dacca' => esc_html__('Asia/Dacca', 'chat-help'),
                    'Asia/Damascus' => esc_html__('Asia/Damascus', 'chat-help'),
                    'Asia/Dhaka' => esc_html__('Asia/Dhaka', 'chat-help'),
                    'Asia/Dili' => esc_html__('Asia/Dili', 'chat-help'),
                    'Asia/Dubai' => esc_html__('Asia/Dubai', 'chat-help'),
                    'Asia/Dushanbe' => esc_html__('Asia/Dushanbe', 'chat-help'),
                    'Asia/Famagusta' => esc_html__('Asia/Famagusta', 'chat-help'),
                    'Asia/Gaza' => esc_html__('Asia/Gaza', 'chat-help'),
                    'Asia/Harbin' => esc_html__('Asia/Harbin', 'chat-help'),
                    'Asia/Hebron' => esc_html__('Asia/Hebron', 'chat-help'),
                    'Asia/Ho_Chi_Minh' => esc_html__('Asia/Ho_Chi_Minh', 'chat-help'),
                    'Asia/Hong_Kong' => esc_html__('Asia/Hong_Kong', 'chat-help'),
                    'Asia/Hovd' => esc_html__('Asia/Hovd', 'chat-help'),
                    'Asia/Irkutsk' => esc_html__('Asia/Irkutsk', 'chat-help'),
                    'Asia/Istanbul' => esc_html__('Asia/Istanbul', 'chat-help'),
                    'Asia/Jakarta' => esc_html__('Asia/Jakarta', 'chat-help'),
                    'Asia/Jayapura' => esc_html__('Asia/Jayapura', 'chat-help'),
                    'Asia/Jerusalem' => esc_html__('Asia/Jerusalem', 'chat-help'),
                    'Asia/Kabul' => esc_html__('Asia/Kabul', 'chat-help'),
                    'Asia/Kamchatka' => esc_html__('Asia/Kamchatka', 'chat-help'),
                    'Asia/Karachi' => esc_html__('Asia/Karachi', 'chat-help'),
                    'Asia/Kashgar' => esc_html__('Asia/Kashgar', 'chat-help'),
                    'Asia/Kathmandu' => esc_html__('Asia/Kathmandu', 'chat-help'),
                    'Asia/Katmandu' => esc_html__('Asia/Katmandu', 'chat-help'),
                    'Asia/Khandyga' => esc_html__('Asia/Khandyga', 'chat-help'),
                    'Asia/Kolkata' => esc_html__('Asia/Kolkata', 'chat-help'),
                    'Asia/Krasnoyarsk' => esc_html__('Asia/Krasnoyarsk', 'chat-help'),
                    'Asia/Kuala_Lumpur' => esc_html__('Asia/Kuala_Lumpur', 'chat-help'),
                    'Asia/Kuching' => esc_html__('Asia/Kuching', 'chat-help'),
                    'Asia/Kuwait' => esc_html__('Asia/Kuwait', 'chat-help'),
                    'Asia/Macao' => esc_html__('Asia/Macao', 'chat-help'),
                    'Asia/Macau' => esc_html__('Asia/Macau', 'chat-help'),
                    'Asia/Magadan' => esc_html__('Asia/Magadan', 'chat-help'),
                    'Asia/Makassar' => esc_html__('Asia/Makassar', 'chat-help'),
                    'Asia/Manila' => esc_html__('Asia/Manila', 'chat-help'),
                    'Asia/Muscat' => esc_html__('Asia/Muscat', 'chat-help'),
                    'Asia/Nicosia' => esc_html__('Asia/Nicosia', 'chat-help'),
                    'Asia/Novokuznetsk' => esc_html__('Asia/Novokuznetsk', 'chat-help'),
                    'Asia/Novosibirsk' => esc_html__('Asia/Novosibirsk', 'chat-help'),
                    'Asia/Omsk' => esc_html__('Asia/Omsk', 'chat-help'),
                    'Asia/Oral' => esc_html__('Asia/Oral', 'chat-help'),
                    'Asia/Phnom_Penh' => esc_html__('Asia/Phnom_Penh', 'chat-help'),
                    'Asia/Pontianak' => esc_html__('Asia/Pontianak', 'chat-help'),
                    'Asia/Pyongyang' => esc_html__('Asia/Pyongyang', 'chat-help'),
                    'Asia/Qatar' => esc_html__('Asia/Qatar', 'chat-help'),
                    'Asia/Qyzylorda' => esc_html__('Asia/Qyzylorda', 'chat-help'),
                    'Asia/Rangoon' => esc_html__('Asia/Rangoon', 'chat-help'),
                    'Asia/Riyadh' => esc_html__('Asia/Riyadh', 'chat-help'),
                    'Asia/Saigon' => esc_html__('Asia/Saigon', 'chat-help'),
                    'Asia/Sakhalin' => esc_html__('Asia/Sakhalin', 'chat-help'),
                    'Asia/Samarkand' => esc_html__('Asia/Samarkand', 'chat-help'),
                    'Asia/Seoul' => esc_html__('Asia/Seoul', 'chat-help'),
                    'Asia/Shanghai' => esc_html__('Asia/Shanghai', 'chat-help'),
                    'Asia/Singapore' => esc_html__('Asia/Singapore', 'chat-help'),
                    'Asia/Srednekolymsk' => esc_html__('Asia/Srednekolymsk', 'chat-help'),
                    'Asia/Taipei' => esc_html__('Asia/Taipei', 'chat-help'),
                    'Asia/Tashkent' => esc_html__('Asia/Tashkent', 'chat-help'),
                    'Asia/Tbilisi' => esc_html__('Asia/Tbilisi', 'chat-help'),
                    'Asia/Tehran' => esc_html__('Asia/Tehran', 'chat-help'),
                    'Asia/Tel_Aviv' => esc_html__('Asia/Tel_Aviv', 'chat-help'),
                    'Asia/Thimbu' => esc_html__('Asia/Thimbu', 'chat-help'),
                    'Asia/Thimphu' => esc_html__('Asia/Thimphu', 'chat-help'),
                    'Asia/Tokyo' => esc_html__('Asia/Tokyo', 'chat-help'),
                    'Asia/Tomsk' => esc_html__('Asia/Tomsk', 'chat-help'),
                    'Asia/Ujung_Pandang' => esc_html__('Asia/Ujung_Pandang', 'chat-help'),
                    'Asia/Ulaanbaatar' => esc_html__('Asia/Ulaanbaatar', 'chat-help'),
                    'Asia/Ulan_Bator' => esc_html__('Asia/Ulan_Bator', 'chat-help'),
                    'Asia/Urumqi' => esc_html__('Asia/Urumqi', 'chat-help'),
                    'Asia/Ust-Nera' => esc_html__('Asia/Ust-Nera', 'chat-help'),
                    'Asia/Vientiane' => esc_html__('Asia/Vientiane', 'chat-help'),
                    'Asia/Vladivostok' => esc_html__('Asia/Vladivostok', 'chat-help'),
                    'Asia/Yakutsk' => esc_html__('Asia/Yakutsk', 'chat-help'),
                    'Asia/Yangon' => esc_html__('Asia/Yangon', 'chat-help'),
                    'Asia/Yekaterinburg' => esc_html__('Asia/Yekaterinburg', 'chat-help'),
                    'Asia/Yerevan' => esc_html__('Asia/Yerevan', 'chat-help'),
                    'Atlantic/Azores' => esc_html__('Atlantic/Azores', 'chat-help'),
                    'Atlantic/Bermuda' => esc_html__('Atlantic/Bermuda', 'chat-help'),
                    'Atlantic/Canary' => esc_html__('Atlantic/Canary', 'chat-help'),
                    'Atlantic/Cape_Verde' => esc_html__('Atlantic/Cape_Verde', 'chat-help'),
                    'Atlantic/Faeroe' => esc_html__('Atlantic/Faeroe', 'chat-help'),
                    'Atlantic/Faroe' => esc_html__('Atlantic/Faroe', 'chat-help'),
                    'Atlantic/Jan_Mayen' => esc_html__('Atlantic/Jan_Mayen', 'chat-help'),
                    'Atlantic/Madeira' => esc_html__('Atlantic/Madeira', 'chat-help'),
                    'Atlantic/Reykjavik' => esc_html__('Atlantic/Reykjavik', 'chat-help'),
                    'Atlantic/South_Georgia' => esc_html__('Atlantic/South_Georgia', 'chat-help'),
                    'Atlantic/St_Helena' => esc_html__('Atlantic/St_Helena', 'chat-help'),
                    'Atlantic/Stanley' => esc_html__('Atlantic/Stanley', 'chat-help'),
                    'Australia/ACT' => esc_html__('Australia/ACT', 'chat-help'),
                    'Australia/Adelaide' => esc_html__('Australia/Adelaide', 'chat-help'),
                    'Australia/Brisbane' => esc_html__('Australia/Brisbane', 'chat-help'),
                    'Australia/Broken_Hill' => esc_html__('Asia/Broken_Hill', 'chat-help'),
                    'Australia/Canberra' => esc_html__('Australia/Canberra', 'chat-help'),
                    'Australia/Currie' => esc_html__('Australia/Currie', 'chat-help'),
                    'Australia/Darwin' => esc_html__('Australia/Darwin', 'chat-help'),
                    'Australia/Eucla' => esc_html__('Australia/Eucla', 'chat-help'),
                    'Australia/Hobart' => esc_html__('Australia/Hobart', 'chat-help'),
                    'Australia/LHI' => esc_html__('Australia/LHI', 'chat-help'),
                    'Australia/Lindeman' => esc_html__('Australia/Lindeman', 'chat-help'),
                    'Australia/Lord_Howe' => esc_html__('Australia/Lord_Howe', 'chat-help'),
                    'Australia/Melbourne' => esc_html__('Australia/Melbourne', 'chat-help'),
                    'Australia/NSW' => esc_html__('Australia/NSW', 'chat-help'),
                    'Australia/North' => esc_html__('Australia/North', 'chat-help'),
                    'Australia/Perth' => esc_html__('Australia/Perth', 'chat-help'),
                    'Australia/Queensland' => esc_html__('Australia/Queensland', 'chat-help'),
                    'Australia/South' => esc_html__('Australia/South', 'chat-help'),
                    'Australia/Sydney' => esc_html__('Australia/Sydney', 'chat-help'),
                    'Australia/Tasmania' => esc_html__('Australia/Tasmania', 'chat-help'),
                    'Australia/Victoria' => esc_html__('Australia/Victoria', 'chat-help'),
                    'Australia/West' => esc_html__('Australia/West', 'chat-help'),
                    'Australia/Yancowinna' => esc_html__('Australia/Yancowinna', 'chat-help'),
                    'Brazil/Acre' => esc_html__('Brazil/Acre', 'chat-help'),
                    'Brazil/DeNoronha' => esc_html__('Brazil/DeNoronha', 'chat-help'),
                    'Brazil/East' => esc_html__('Brazil/East', 'chat-help'),
                    'Brazil/West' => esc_html__('Brazil/West', 'chat-help'),
                    'CET' => esc_html__('CET', 'chat-help'),
                    'CST6CDT' => esc_html__('CST6CDT', 'chat-help'),
                    'Canada/Atlantic' => esc_html__('Canada/Atlantic', 'chat-help'),
                    'Canada/Central' => esc_html__('Canada/Central', 'chat-help'),
                    'Canada/Eastern' => esc_html__('Canada/Eastern', 'chat-help'),
                    'Canada/Mountain' => esc_html__('Canada/Mountain', 'chat-help'),
                    'Canada/Newfoundland' => esc_html__('Canada/Newfoundland', 'chat-help'),
                    'Canada/Pacific' => esc_html__('Canada/Pacific', 'chat-help'),
                    'Canada/Saskatchewan' => esc_html__('Canada/Saskatchewan', 'chat-help'),
                    'Canada/Yukon' => esc_html__('Canada/Yukon', 'chat-help'),
                    'Chile/Continental' => esc_html__('Chile/Continental', 'chat-help'),
                    'Chile/EasterIsland' => esc_html__('Chile/EasterIsland', 'chat-help'),
                    'Cuba' => esc_html__('Cuba', 'chat-help'),
                    'EET' => esc_html__('EET', 'chat-help'),
                    'EST' => esc_html__('EST', 'chat-help'),
                    'EST5EDT' => esc_html__('EST5EDT', 'chat-help'),
                    'Egypt' => esc_html__('Egypt', 'chat-help'),
                    'Eire' => esc_html__('Eire', 'chat-help'),
                    'Etc/GMT' => esc_html__('Etc/GMT', 'chat-help'),
                    'Etc/GMT+0' => esc_html__('Etc/GMT+0', 'chat-help'),
                    'Etc/GMT+1' => esc_html__('Etc/GMT+1', 'chat-help'),
                    'Etc/GMT+10' => esc_html__('Etc/GMT+10', 'chat-help'),
                    'Etc/GMT+11' => esc_html__('Etc/GMT+11', 'chat-help'),
                    'Etc/GMT+12' => esc_html__('Etc/GMT+12', 'chat-help'),
                    'Etc/GMT+2' => esc_html__('Etc/GMT+2', 'chat-help'),
                    'Etc/GMT+3' => esc_html__('Etc/GMT+3', 'chat-help'),
                    'Etc/GMT+4' => esc_html__('Etc/GMT+4', 'chat-help'),
                    'Etc/GMT+5' => esc_html__('Etc/GMT+5', 'chat-help'),
                    'Etc/GMT+6' => esc_html__('Etc/GMT+6', 'chat-help'),
                    'Etc/GMT+7' => esc_html__('Etc/GMT+7', 'chat-help'),
                    'Etc/GMT+8' => esc_html__('Etc/GMT+8', 'chat-help'),
                    'Etc/GMT+9' => esc_html__('Etc/GMT+9', 'chat-help'),
                    'Etc/GMT-0' => esc_html__('Etc/GMT-0', 'chat-help'),
                    'Etc/GMT-1' => esc_html__('Etc/GMT-1', 'chat-help'),
                    'Etc/GMT-10' => esc_html__('Etc/GMT-10', 'chat-help'),
                    'Etc/GMT-11' => esc_html__('Etc/GMT-11', 'chat-help'),
                    'Etc/GMT-12' => esc_html__('Etc/GMT-12', 'chat-help'),
                    'Etc/GMT-13' => esc_html__('Etc/GMT-13', 'chat-help'),
                    'Etc/GMT-14' => esc_html__('Etc/GMT-14', 'chat-help'),
                    'Etc/GMT-2' => esc_html__('Etc/GMT-2', 'chat-help'),
                    'Etc/GMT-3' => esc_html__('Etc/GMT-3', 'chat-help'),
                    'Etc/GMT-4' => esc_html__('Etc/GMT-4', 'chat-help'),
                    'Etc/GMT-5' => esc_html__('Etc/GMT-5', 'chat-help'),
                    'Etc/GMT-6' => esc_html__('Etc/GMT-6', 'chat-help'),
                    'Etc/GMT-7' => esc_html__('Etc/GMT-7', 'chat-help'),
                    'Etc/GMT-8' => esc_html__('Etc/GMT-8', 'chat-help'),
                    'Etc/GMT-9' => esc_html__('Etc/GMT-9', 'chat-help'),
                    'Etc/GMT0' => esc_html__('Etc/GMT0', 'chat-help'),
                    'Etc/Greenwich' => esc_html__('Etc/Greenwich', 'chat-help'),
                    'Etc/UCT' => esc_html__('Etc/UCT', 'chat-help'),
                    'Etc/UTC' => esc_html__('Etc/UTC', 'chat-help'),
                    'Etc/Universal' => esc_html__('Etc/Universal', 'chat-help'),
                    'Etc/Zulu' => esc_html__('Etc/Zulu', 'chat-help'),
                    'Europe/Amsterdam' => esc_html__('Europe/Amsterdam', 'chat-help'),
                    'Europe/Andorra' => esc_html__('Europe/Andorra', 'chat-help'),
                    'Europe/Astrakhan' => esc_html__('Europe/Astrakhan', 'chat-help'),
                    'Europe/Athens' => esc_html__('Europe/Athens', 'chat-help'),
                    'Europe/Belfast' => esc_html__('Europe/Belfast', 'chat-help'),
                    'Europe/Belgrade' => esc_html__('Europe/Belgrade', 'chat-help'),
                    'Europe/Berlin' => esc_html__('Europe/Berlin', 'chat-help'),
                    'Europe/Bratislava' => esc_html__('Europe/Bratislava', 'chat-help'),
                    'Europe/Brussels' => esc_html__('Europe/Brussels', 'chat-help'),
                    'Europe/Bucharest' => esc_html__('Europe/Bucharest', 'chat-help'),
                    'Europe/Budapest' => esc_html__('Europe/Budapest', 'chat-help'),
                    'Europe/Busingen' => esc_html__('Europe/Busingen', 'chat-help'),
                    'Europe/Chisinau' => esc_html__('Europe/Chisinau', 'chat-help'),
                    'Europe/Copenhagen' => esc_html__('Europe/Copenhagen', 'chat-help'),
                    'Europe/Dublin' => esc_html__('Europe/Dublin', 'chat-help'),
                    'Europe/Gibraltar' => esc_html__('Europe/Gibraltar', 'chat-help'),
                    'Europe/Guernsey' => esc_html__('Europe/Guernsey', 'chat-help'),
                    'Europe/Helsinki' => esc_html__('Europe/Helsinki', 'chat-help'),
                    'Europe/Isle_of_Man' => esc_html__('Europe/Isle_of_Man', 'chat-help'),
                    'Europe/Istanbul' => esc_html__('Europe/Istanbul', 'chat-help'),
                    'Europe/Jersey' => esc_html__('Europe/Jersey', 'chat-help'),
                    'Europe/Kaliningrad' => esc_html__('Europe/Kaliningrad', 'chat-help'),
                    'Europe/Kiev' => esc_html__('Europe/Kiev', 'chat-help'),
                    'Europe/Kirov' => esc_html__('Europe/Kirov', 'chat-help'),
                    'Europe/Lisbon' => esc_html__('Europe/Lisbon', 'chat-help'),
                    'Europe/Ljubljana' => esc_html__('Europe/Ljubljana', 'chat-help'),
                    'Europe/London' => esc_html__('Europe/London', 'chat-help'),
                    'Europe/Luxembourg' => esc_html__('Europe/Luxembourg', 'chat-help'),
                    'Europe/Madrid' => esc_html__('Europe/Madrid', 'chat-help'),
                    'Europe/Malta' => esc_html__('Europe/Malta', 'chat-help'),
                    'Europe/Mariehamn' => esc_html__('Europe/Mariehamn', 'chat-help'),
                    'Europe/Minsk' => esc_html__('Europe/Minsk', 'chat-help'),
                    'Europe/Monaco' => esc_html__('Europe/Monaco', 'chat-help'),
                    'Europe/Moscow' => esc_html__('Europe/Moscow', 'chat-help'),
                    'Europe/Nicosia' => esc_html__('Europe/Nicosia', 'chat-help'),
                    'Europe/Oslo' => esc_html__('Europe/Oslo', 'chat-help'),
                    'Europe/Paris' => esc_html__('Europe/Paris', 'chat-help'),
                    'Europe/Podgorica' => esc_html__('Europe/Podgorica', 'chat-help'),
                    'Europe/Prague' => esc_html__('Europe/Prague', 'chat-help'),
                    'Europe/Riga' => esc_html__('Europe/Riga', 'chat-help'),
                    'Europe/Rome' => esc_html__('Europe/Rome', 'chat-help'),
                    'Europe/Samara' => esc_html__('Europe/Samara', 'chat-help'),
                    'Europe/San_Marino' => esc_html__('Europe/San_Marino', 'chat-help'),
                    'Europe/Sarajevo' => esc_html__('Europe/Sarajevo', 'chat-help'),
                    'Europe/Saratov' => esc_html__('Europe/Saratov', 'chat-help'),
                    'Europe/Simferopol' => esc_html__('Europe/Simferopol', 'chat-help'),
                    'Europe/Skopje' => esc_html__('Europe/Skopje', 'chat-help'),
                    'Europe/Sofia' => esc_html__('Europe/Sofia', 'chat-help'),
                    'Europe/Stockholm' => esc_html__('Europe/Stockholm', 'chat-help'),
                    'Europe/Tallinn' => esc_html__('Europe/Tallinn', 'chat-help'),
                    'Europe/Tirane' => esc_html__('Europe/Tirane', 'chat-help'),
                    'Europe/Tiraspol' => esc_html__('Europe/Tiraspol', 'chat-help'),
                    'Europe/Ulyanovsk' => esc_html__('Europe/Ulyanovsk', 'chat-help'),
                    'Europe/Uzhgorod' => esc_html__('Europe/Uzhgorod', 'chat-help'),
                    'Europe/Vaduz' => esc_html__('Europe/Vaduz', 'chat-help'),
                    'Europe/Vatican' => esc_html__('Europe/Vatican', 'chat-help'),
                    'Europe/Vienna' => esc_html__('Europe/Vienna', 'chat-help'),
                    'Europe/Vilnius' => esc_html__('Europe/Vilnius', 'chat-help'),
                    'Europe/Volgograd' => esc_html__('Europe/Volgograd', 'chat-help'),
                    'Europe/Warsaw' => esc_html__('Europe/Warsaw', 'chat-help'),
                    'Europe/Zagreb' => esc_html__('Europe/Zagreb', 'chat-help'),
                    'Europe/Zaporozhye' => esc_html__('Europe/Zaporozhye', 'chat-help'),
                    'Europe/Zurich' => esc_html__('Europe/Zurich', 'chat-help'),
                    'GB' => esc_html__('GB', 'chat-help'),
                    'GB-Eire' => esc_html__('GB-Eire', 'chat-help'),
                    'GMT' => esc_html__('GMT', 'chat-help'),
                    'GMT+0' => esc_html__('GMT+0', 'chat-help'),
                    'GMT-0' => esc_html__('GMT-0', 'chat-help'),
                    'GMT0' => esc_html__('GMT0', 'chat-help'),
                    'Greenwich' => esc_html__('Greenwich', 'chat-help'),
                    'HST' => esc_html__('HST', 'chat-help'),
                    'Hongkong' => esc_html__('Hongkong', 'chat-help'),
                    'Iceland' => esc_html__('Iceland', 'chat-help'),
                    'Indian/Antananarivo' => esc_html__('Indian/Antananarivo', 'chat-help'),
                    'Indian/Chagos' => esc_html__('Indian/Chagos', 'chat-help'),
                    'Indian/Christmas' => esc_html__('Indian/Christmas', 'chat-help'),
                    'Indian/Cocos' => esc_html__('Indian/Cocos', 'chat-help'),
                    'Indian/Comoro' => esc_html__('Indian/Comoro', 'chat-help'),
                    'Indian/Kerguelen' => esc_html__('Indian/Kerguelen', 'chat-help'),
                    'Indian/Mahe' => esc_html__('Indian/Mahe', 'chat-help'),
                    'Indian/Maldives' => esc_html__('Indian/Maldives', 'chat-help'),
                    'Indian/Mauritius' => esc_html__('Indian/Mauritius', 'chat-help'),
                    'Indian/Mayotte' => esc_html__('Indian/Mayotte', 'chat-help'),
                    'Indian/Reunion' => esc_html__('Indian/Reunion', 'chat-help'),
                    'Iran' => esc_html__('Iran', 'chat-help'),
                    'Israel' => esc_html__('Israel', 'chat-help'),
                    'Jamaica' => esc_html__('Jamaica', 'chat-help'),
                    'Japan' => esc_html__('Japan', 'chat-help'),
                    'Kwajalein' => esc_html__('Kwajalein', 'chat-help'),
                    'Libya' => esc_html__('Libya', 'chat-help'),
                    'MET' => esc_html__('MET', 'chat-help'),
                    'MST' => esc_html__('MST', 'chat-help'),
                    'MST7MDT' => esc_html__('MST7MDT', 'chat-help'),
                    'Mexico/BajaNorte' => esc_html__('Mexico/BajaNorte', 'chat-help'),
                    'Mexico/BajaSur' => esc_html__('Mexico/BajaSur', 'chat-help'),
                    'Mexico/General' => esc_html__('Mexico/General', 'chat-help'),
                    'NZ' => esc_html__('NZ', 'chat-help'),
                    'NZ-CHAT' => esc_html__('NZ-CHAT', 'chat-help'),
                    'Navajo' => esc_html__('Navajo', 'chat-help'),
                    'PRC' => esc_html__('PRC', 'chat-help'),
                    'PST8PDT' => esc_html__('PST8PDT', 'chat-help'),
                    'Pacific/Apia' => esc_html__('Pacific/Apia', 'chat-help'),
                    'Pacific/Auckland' => esc_html__('Pacific/Auckland', 'chat-help'),
                    'Pacific/Bougainville' => esc_html__('Pacific/Bougainville', 'chat-help'),
                    'Pacific/Chatham' => esc_html__('Pacific/Chatham', 'chat-help'),
                    'Pacific/Chuuk' => esc_html__('Pacific/Chuuk', 'chat-help'),
                    'Pacific/Easter' => esc_html__('Pacific/Easter', 'chat-help'),
                    'Pacific/Efate' => esc_html__('Pacific/Efate', 'chat-help'),
                    'Pacific/Enderbury' => esc_html__('Pacific/Enderbury', 'chat-help'),
                    'Pacific/Fakaofo' => esc_html__('Pacific/Fakaofo', 'chat-help'),
                    'Pacific/Fiji' => esc_html__('Pacific/Fiji', 'chat-help'),
                    'Pacific/Funafuti' => esc_html__('Pacific/Funafuti', 'chat-help'),
                    'Pacific/Galapagos' => esc_html__('Pacific/Galapagos', 'chat-help'),
                    'Pacific/Gambier' => esc_html__('Pacific/Gambier', 'chat-help'),
                    'Pacific/Guadalcanal' => esc_html__('Pacific/Guadalcanal', 'chat-help'),
                    'Pacific/Guam' => esc_html__('Pacific/Guam', 'chat-help'),
                    'Pacific/Honolulu' => esc_html__('Pacific/Honolulu', 'chat-help'),
                    'Pacific/Johnston' => esc_html__('Pacific/Johnston', 'chat-help'),
                    'Pacific/Kiritimati' => esc_html__('Pacific/Kiritimati', 'chat-help'),
                    'Pacific/Kosrae' => esc_html__('Pacific/Kosrae', 'chat-help'),
                    'Pacific/Kwajalein' => esc_html__('Pacific/Kwajalein', 'chat-help'),
                    'Pacific/Majuro' => esc_html__('Pacific/Majuro', 'chat-help'),
                    'Pacific/Marquesas' => esc_html__('Pacific/Marquesas', 'chat-help'),
                    'Pacific/Midway' => esc_html__('Pacific/Midway', 'chat-help'),
                    'Pacific/Nauru' => esc_html__('Pacific/Nauru', 'chat-help'),
                    'Pacific/Niue' => esc_html__('Pacific/Niue', 'chat-help'),
                    'Pacific/Norfolk' => esc_html__('Pacific/Norfolk', 'chat-help'),
                    'Pacific/Noumea' => esc_html__('Pacific/Noumea', 'chat-help'),
                    'Pacific/Pago_Pago' => esc_html__('Pacific/Pago_Pago', 'chat-help'),
                    'Pacific/Palau' => esc_html__('Pacific/Palau', 'chat-help'),
                    'Pacific/Pitcairn' => esc_html__('Pacific/Pitcairn', 'chat-help'),
                    'Pacific/Pohnpei' => esc_html__('Pacific/Pohnpei', 'chat-help'),
                    'Pacific/Ponape' => esc_html__('Pacific/Ponape', 'chat-help'),
                    'Pacific/Port_Moresby' => esc_html__('Pacific/Port_Moresby', 'chat-help'),
                    'Pacific/Rarotonga' => esc_html__('Pacific/Rarotonga', 'chat-help'),
                    'Pacific/Saipan' => esc_html__('Pacific/Saipan', 'chat-help'),
                    'Pacific/Samoa' => esc_html__('Pacific/Samoa', 'chat-help'),
                    'Pacific/Tahiti' => esc_html__('Pacific/Tahiti', 'chat-help'),
                    'Pacific/Tarawa' => esc_html__('Pacific/Tarawa', 'chat-help'),
                    'Pacific/Tongatapu' => esc_html__('Pacific/Tongatapu', 'chat-help'),
                    'Pacific/Truk' => esc_html__('Pacific/Truk', 'chat-help'),
                    'Pacific/Wake' => esc_html__('Pacific/Wake', 'chat-help'),
                    'Pacific/Wallis' => esc_html__('Pacific/Wallis', 'chat-help'),
                    'Pacific/Yap' => esc_html__('Pacific/Yap', 'chat-help'),
                    'Poland' => esc_html__('Poland', 'chat-help'),
                    'Portugal' => esc_html__('Portugal', 'chat-help'),
                    'ROC' => esc_html__('ROC', 'chat-help'),
                    'ROK' => esc_html__('ROK', 'chat-help'),
                    'Singapore' => esc_html__('Singapore', 'chat-help'),
                    'Turkey' => esc_html__('Turkey', 'chat-help'),
                    'UCT' => esc_html__('UCT', 'chat-help'),
                    'US/Alaska' => esc_html__('US/Alaska', 'chat-help'),
                    'US/Aleutian' => esc_html__('US/Aleutian', 'chat-help'),
                    'US/Arizona' => esc_html__('US/Arizona', 'chat-help'),
                    'US/Central' => esc_html__('US/Central', 'chat-help'),
                    'US/East-Indiana' => esc_html__('US/East-Indiana', 'chat-help'),
                    'US/Eastern' => esc_html__('US/Eastern', 'chat-help'),
                    'US/Hawaii' => esc_html__('US/Hawaii', 'chat-help'),
                    'US/Indiana-Starke' => esc_html__('US/Indiana-Starke', 'chat-help'),
                    'US/Michigan' => esc_html__('US/Michigan', 'chat-help'),
                    'US/Mountain' => esc_html__('US/Mountain', 'chat-help'),
                    'US/Pacific' => esc_html__('US/Pacific', 'chat-help'),
                    'US/Pacific-New' => esc_html__('US/Pacific-New', 'chat-help'),
                    'US/Samoa' => esc_html__('US/Samoa', 'chat-help'),
                    'UTC' => esc_html__('UTC', 'chat-help'),
                    'Universal' => esc_html__('Universal', 'chat-help'),
                    'W-SU' => esc_html__('W-SU', 'chat-help'),
                    'WET' => esc_html__('WET', 'chat-help'),
                )
            ]
        );


        // start sunday popover
        $this->add_control(
            'popover-sunday',
            [
                'label' => esc_html__('Sunday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );


        $this->start_popover();
        $this->add_control(
            'sunday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-sunday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'sunday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-sunday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end sunday popover

        // start monday popover
        $this->add_control(
            'popover-monday',
            [
                'label' => esc_html__('Monday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'monday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-monday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'monday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-monday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end monday popover

        // start tuesday popover
        $this->add_control(
            'popover-tuesday',
            [
                'label' => esc_html__('Tuesday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'tuesday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-tuesday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'tuesday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-tuesday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end tuesday popover

        // start wednesday popover
        $this->add_control(
            'popover-wednesday',
            [
                'label' => esc_html__('Wednesday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'wednesday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-wednesday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'wednesday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-wednesday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end wednesday popover

        // start sunday popover
        $this->add_control(
            'popover-thursday',
            [
                'label' => esc_html__('Thursday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'thursday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-thursday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'thursday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-thursday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end thursday popover

        // start sunday popover
        $this->add_control(
            'popover-friday',
            [
                'label' => esc_html__('Friday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'friday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-friday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'friday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-friday' => 'yes',
                ],
            ]
        );

        $this->end_popover();
        // end friday popover

        $this->add_control(
            'popover-saturday',
            [
                'label' => esc_html__('Saturday', 'chat-help'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            ]
        );

        $this->start_popover();
        $this->add_control(
            'saturday__start',
            [
                'label' => esc_html__('Start time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '00:00',
                'condition' => [
                    'popover-saturday' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'saturday__end',
            [
                'label' => esc_html__('End time', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::TEXT,
                'label_block' => false,
                'default' => '23:59',
                'condition' => [
                    'popover-saturday' => 'yes',
                ],
            ]
        );
        $this->end_popover();

        $this->end_controls_section(); // End section top content

        $this->start_controls_section(
            'ctw__appearance',
            [
                'label' => esc_html__('Appearance settings', 'chat-help'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'visibility',
            [
                'label' => esc_html__('Visibility on', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::SELECT2,
                'label_block' => false,
                'default' => 'wHelp-show-everywhere',
                'options' => array(
                    'wHelp-show-everywhere'  => esc_html__('Everywhere', 'chat-help'),
                    'wHelp-desktop-only'  => esc_html__('Desktops only', 'chat-help'),
                    'wHelp-tablet-only'  => esc_html__('Tablets only', 'chat-help'),
                    'wHelp-mobile-tablet-only'  => esc_html__('Mobile and tablets', 'chat-help'),
                    'wHelp-mobile-only'  => esc_html__('Mobile only', 'chat-help'),
                )

            ]
        );

        $this->add_control(
            'button__sizes',
            [
                'label' => esc_html__('Size', 'chat-help'),
                'type'  => \Elementor\Controls_Manager::SELECT,
                'label_block' => false,
                'default' => 'wHelp-btn-md',
                'options' => array(
                    'wHelp-btn-sm' => esc_html__('Small', 'chat-help'),
                    'wHelp-btn-md' => esc_html__('Medium', 'chat-help'),
                    'wHelp-btn-lg' => esc_html__('Large', 'chat-help'),
                )
            ]
        );

        $this->add_control(
            'bg__color',
            [
                'label' => esc_html__('Backgound color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#118c7e',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg' => 'background-color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'bg__color__hover',
            [
                'label' => esc_html__('Hover backgound color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0b5a51',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg:hover' => 'background-color: {{VALUE}}'
                ],
            ]
        );

        $this->add_control(
            'text__color',
            [
                'label' => esc_html__('Text color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'text__color__hover',
            [
                'label' => esc_html__('Hover text color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg:hover' => 'color: {{VALUE}}',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__('Border', 'chat-help'),
                'selector' => '{{WRAPPER}} .wHelpButtons, {{WRAPPER}} .wHelp-button-2',
                'fields_options' => [
                    'border' => [
                        'label' => esc_html__('Border', 'chat-help'),
                        'default' => 'solid',
                    ],
                    'width' => [
                        'default' => [
                            'top' => '1',
                            'right' => '1',
                            'bottom' => '1',
                            'left' => '1',
                            'isLinked' => false,
                        ],
                    ],
                    'color' => [
                        'default' => '#118c7e',
                    ],
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border__hover',
                'label' => esc_html__('Hover border', 'chat-help'),
                'default' => '#0b5a51',
                'selector' => '{{WRAPPER}} .wHelpButtons:hover, {{WRAPPER}} .wHelp-button-2:hover',
                'fields_options' => [
                    'border' => [
                        'label' => esc_html__('Hover border', 'chat-help'),
                        'default' => 'solid',
                    ],
                    'width' => [
                        'default' => [
                            'top' => '1',
                            'right' => '1',
                            'bottom' => '1',
                            'left' => '1',
                            'isLinked' => false,
                        ],
                    ],
                    'color' => [
                        'default' => '#0b5a51',
                    ],
                ],
            ]
        );

        $this->add_control(
            'button__icon',
            [
                'label' => esc_html__('Change icon', 'chat-help'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'icofont-brand-whatsapp',
                ],
                'condition' => [
                    'style' => '2',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'envelope',
                        'envelope-open',
                        'facebook-messenger',
                    ],
                    'fa-regular' => [
                        'envelope',
                        'envelope-open',
                    ],

                ],
            ]
        );

        $this->add_control(
            'icon__color',
            [
                'label' => esc_html__('Icon color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#118c7e',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'icon__color__hover',
            [
                'label' => esc_html__('Icon hover color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#0b5a51',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-btn-bg:hover i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'show__icon__bg__color',
            [
                'label' => esc_html__('Want bg in icon?', 'chat-help'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'chat-help'),
                'label_off' => esc_html__('No', 'chat-help'),
                'return_value' => 'wHelp-button-3',
                'condition' => [
                    'style' => '2',
                ],
            ]
        );

        $this->add_control(
            'icon__bg__color',
            [
                'label' => esc_html__('Icon bg color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-button-3.wHelp-btn-bg i' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                    'show__icon__bg__color' => 'wHelp-button-3',
                ],
            ]
        );

        $this->add_control(
            'icon__bg__color__hover',
            [
                'label' => esc_html__('Icon hover bg color', 'chat-help'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} [class*="wHelp-button-"].wHelp-button-3.wHelp-btn-bg:hover i' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'style' => '2',
                    'show__icon__bg__color' => 'wHelp-button-3',
                ],
            ]
        );

        $this->add_control(
            'rounded',
            [
                'label' => esc_html__('Rounded?', 'chat-help'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'chat-help'),
                'label_off' => esc_html__('No', 'chat-help'),
                'return_value' => 'wHelp-btn-rounded',
            ]
        );

        $this->add_control(
            'text_align',
            [
                'label' => esc_html__('Alignment', 'chat-help'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'chat-help'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'chat-help'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'chat-help'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .button-wrapper' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section(); // End section top content


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        // button settings
        $style = $settings['style'];
        $number =  $settings['number'];
        $timezone =  $settings['timezone'];
        $visibility = $settings['visibility'];
        $icon = isset($settings['button__icon']['value']) ? $settings['button__icon']['value'] : '';
        $rounded = $settings['rounded'];
        $icon__bg = $settings['show__icon__bg__color'];
        $sizes = $settings['button__sizes'];
        $photo = isset($settings['agent__photo']['url']) ? $settings['agent__photo']['url'] : '';
        $name = $settings['agent__name'];
        $designation = $settings['agent__designation'];
        $label_text = $settings['custom__button__label'];
        $online_text = $settings['online__text'];
        $offline_text = $settings['offline__text'];
        // availablity

        $sunday = ($settings['sunday__start'] ? $settings['sunday__start'] : "0:00") . "-" . ($settings['sunday__end'] ? $settings['sunday__end'] : "23:59");
        $monday = ($settings['monday__start'] ? $settings['monday__start'] : "0:00") . "-" . ($settings['monday__end'] ? $settings['monday__end'] : "23:59");
        $tuesday = ($settings['tuesday__start'] ? $settings['tuesday__start'] : "0:00") . "-" . ($settings['tuesday__end'] ? $settings['tuesday__end'] : "23:59");
        $wednesday = ($settings['wednesday__start'] ? $settings['wednesday__start'] : "0:00") . "-" . ($settings['wednesday__end'] ? $settings['wednesday__end'] : "23:59");
        $thursday = ($settings['thursday__start'] ? $settings['thursday__start'] : "0:00") . "-" . ($settings['thursday__end'] ? $settings['thursday__end'] : "23:59");
        $friday = ($settings['friday__start'] ? $settings['friday__start'] : "0:00") . "-" . ($settings['friday__end'] ? $settings['friday__end'] : "23:59");
        $saturday = ($settings['saturday__start'] ? $settings['saturday__start'] : "0:00") . "-" . ($settings['saturday__end'] ? $settings['saturday__end'] : "23:59");
        $wHelpIcon = $icon ? $icon : "icofont-brand-whatsapp";

?>
        <?php if ($style === '1') : ?>
            <div class="button-wrapper">
                <button <?php if ($timezone) { ?> data-timezone="<?php esc_attr($timezone); ?>" <?php } ?> class="wHelpButtons wHelp-button-4 wHelp-btn-bg <?php echo esc_attr($visibility); ?> <?php echo esc_attr($rounded); ?> avatar-active <?php echo esc_attr($sizes); ?>" data-btnavailablety='{ "sunday":"<?php echo esc_attr($sunday); ?>", "monday":"<?php echo esc_attr($monday); ?>", "tuesday":"<?php echo esc_attr($tuesday); ?>", "wednesday":"<?php echo esc_attr($wednesday); ?>", "thursday":"<?php echo esc_attr($thursday); ?>", "friday":"<?php echo esc_attr($friday); ?>", "saturday":"<?php echo esc_attr($saturday); ?>" }'>
                    <?php if ($photo) { ?>
                        <img src="<?php echo esc_attr($photo); ?>" />
                    <?php } ?>
                    <div class="info-wrapper">
                        <?php if ($name || $designation) { ?>
                            <p class="info"><?php if ($name) { ?><?php echo esc_html($name); ?><?php } ?> <?php if ($designation) { ?>/
                                <?php echo esc_html($designation); ?><?php } ?></p>
                        <?php } ?>
                        <?php if ($label_text) { ?>
                            <p class="title"><?php echo esc_html($label_text); ?></p>
                        <?php } ?>
                        <?php if ($online_text) { ?>
                            <p class="online"><?php echo esc_html($online_text); ?></p>
                        <?php } ?>
                        <?php if ($offline_text) { ?>
                            <p class="offline"><?php echo esc_html($offline_text); ?></p>
                        <?php } ?>
                    </div>
                    <a href="https://wa.me/<?php echo esc_attr($number); ?>" target="_blank"></a>
                </button>
            </div>
        <?php else : ?>
            <div class="button-wrapper">
                <a href="https://wa.me/<?php echo esc_url($number); ?>" class="wHelp-button-2 <?php echo esc_attr($icon__bg); ?> wHelp-btn-bg <?php echo esc_attr($visibility); ?> <?php echo esc_attr($rounded); ?> <?php echo esc_attr($sizes); ?>">
                    <i class="<?php echo esc_attr($wHelpIcon); ?>"></i>
                    <?php if ($label_text) { ?><span><?php echo esc_html($label_text); ?></span><?php } ?>
                </a>
            </div>
        <?php endif; ?>
<?php }
}
