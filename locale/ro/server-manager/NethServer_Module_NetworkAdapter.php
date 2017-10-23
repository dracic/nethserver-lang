<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'alocarea IP-ului';
$L['bootproto_none_label'] = 'Static';
$L['blue_label'] = 'Oaspeți (albastru)';
$L['device_label'] = 'Dispozitiv';
$L['gateway_label'] = 'Gateway';
$L['green_label'] = 'LAN (verde)';
$L['hwaddr_label'] = 'Adresă MAC';
$L['ipaddr_label'] = 'Adresă IP';
$L['orange_label'] = 'DMZ (portocaliu)';
$L['Key_label'] = 'Dispozitiv';
$L['netmask_label'] = 'Mască rețea';
$L['NetworkAdapter_Description'] = 'Modifică setările rețelei';
$L['NetworkAdapter_Tags'] = 'rețea adaptor ethernet rețele';
$L['NetworkAdapter_Title'] = 'Reţea';
$L['red_label'] = 'Internet (roșu)';
$L['role_label'] = 'Rol';
$L['update_header_label'] = 'Actualizează dispozitivul';
$L['interface-config_label'] = 'Configurația interfeței';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP poate fi utilizat numai pe interfețele roșii și verzi";
$L['valid_platform,interface-config,interface-role,4'] = "Nu se poate șterge ultima interfață verde";
$L['No'] = 'Nu';
$L['Yes'] = 'Da';
$L['type_alias_label'] = 'Alias';
$L['type_bridge_label'] = 'Punte';
$L['type_bond_label'] = 'Legătură';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configurează atribuirea IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Interfață logică nouă';
$L['CreateLogicalInterface_header'] = 'Interfață logică nouă';
$L['vlanTag_label'] = 'Etichetă';
$L['vlan_label'] = 'Interfață';
$L['InterfaceType_label'] = 'Tip';
$L['Next_label'] = 'Următorul';
$L['Back_label'] = 'Înapoi';
$L['Edit_label'] = 'Editează';
$L['Edit_header'] = 'Editează ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Starea legăturii este \${link}\nViteza \${speed} Mbit/s\nDriver \${driver}\nAdresa MAC \${mac}";
$L['Link_status_up'] = 'conectat';
$L['Link_status_down'] = 'deconectat';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Viteza ${0}';
$L['Confirm_header'] = 'Crează ${role} interfața ${device}';
$L['Action_create_bridge'] = 'Crează o nouă interfață punte ${device} cu ${parts}';
$L['Action_create_bond'] = 'Crează o nouă  interfață de legătură ${bondMode} ${device} cu ${parts}';
$L['Action_create_vlan'] = 'Crează o nouă interfață VLAN ${device} pe ${parts}';
$L['Action_create_role'] = 'Setează rolul la "${role}"';
$L['Action_set_static_ip'] = 'Setează IP static ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obține configurația IP de la server-ul DHCP';
$L['Action_use_gateway'] = 'Utilizează gateway-ul ${gateway}';
$L['Action_use_no_gateway'] = 'Nu seta gateway-ul';
$L['Create_label'] = 'Crează interfața';
$L['bridged_label'] = 'Legat';
$L['slave_label'] = 'Slave';
$L['CreateIpAlias_header'] = 'Crează IP-ul alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Distribuție ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Eliberezi rolul ${role} atribuit interfeței de rețea ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Ștergi ${device} din legătura ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Ștergi ${device} din puntea ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Șterge';
$L['DeleteLogicalInterface_header'] = 'Confirmă ștergerea ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Șterg interfața de legătură ${device}.\n Alege un succesor din interfețele slave pentru a-i atribui rolul curent și setările IP.";
$L['DeleteLogicalInterface_bridge_message'] = "Șterg interfața punte ${device}.\n Alege un succesor din interfețele-punte pentru a-i atribui rolul curent și setările IP.";
$L['DeleteLogicalInterface_vlan_message'] = "Confirmă ștergerea VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirmă ștergerea aliasului \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Eliberează rolul';
$L['Release_label'] = 'Eliberează rolul';
$L['CleanPhysicalInterface_label'] = 'Șterge';
$L['CreateIpAlias_label'] = 'Crează IP alias';
$L['successor_label'] = 'Succesor';
$L['NoSuccessor_label'] = 'Nici unul';
$L['bond_label'] = 'Legătură';
$L['bridge_label'] = 'Punte';
$L['alias_label'] = 'Alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Atribuie roluri interfețelor fizice';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Interfețe fizice';
$L['CleanPhysicalInterface_header'] = 'Șterge ${0}';
$L['Confirm device ${0} removal'] = 'Ștergi dispozitivul ${0} din baza de date?';
$L['Clean_label'] = 'Șterge';
$L['Refresh_label'] = 'Reîmprospătează starea legăturii';
$L['roleis_label'] = 'rol';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Toate roluri sunt corect atribuite plăcilor de rețea';
$L['type_xdsl_label'] = 'PPPoE pe ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Nume de utilizator';
$L['PppoePassword_label'] = 'Parolă';
$L['PppoeInterface_label'] = 'Interfață rețea';
$L['PppoeProvider_label'] = 'Furnizor';
$L['pppoe_label'] = 'PPPoE (roșu)';
$L['SetPppoeParameters_label'] = 'Configurează PPPoE';
$L['SetPppoeParameters_header'] = 'Configurează PPPoE dispozitivul ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Îndepărtezi rolul roșu PPPoE din \${device}?\nDispozitivul asociat ppp0 va fi de asemenea șters.";
$L['DeleteLogicalInterface_xdsl_message'] = "Ștergi dispozitivul logic PPPoE ppp0?";
$L['valid_pppoe_already_configured'] = 'Dispozitivul PPPoE ppp0 este deja configurat';
$L['valid_pppoe_red_role_only'] = 'Dispozitivului PPPoE ppp0 trebuie să i se atribuie rolul roșu';
$L['PppoeAuthType_label'] = 'Tip autentificare';
$L['AuthType_auto'] = 'Automatic';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Mod';
$L['BondMode_0_label'] = 'echilibrare round robin';
$L['BondMode_1_label'] = 'back-up activ';
$L['BondMode_2_label'] = 'echilibrareXOR';
$L['BondMode_3_label'] = 'difuzare';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'echilibrare TLB';
$L['BondMode_6_label'] = 'echilibrare ALB';
$L['red_label'] = 'Internet (roșu)';
$L['multiwan_label'] = 'Multi WAN';
$L['Weight_label'] = 'Importanță legătură';
$L['ProviderName_label'] = 'Nume legătură';
$L['UpstreamProxy_label'] = 'Setări proxy';
$L['DNS_label'] = 'Servere DNS';
$L['trafficshaping_label'] = 'Configurare trafic';
$L['FwInBandwidth_label'] = 'Lățime bandă de intrare (kilobiți pe secundă)';
$L['FwOutBandwidth_label'] = 'Lățime bandă de ieșire (kilobiți pe secundă)';
$L['valid_platform,logical-interface-create,dhcp-conflicts,3'] = 'Unele interfețe au asociate intervale de adrese atribuite prin DHCP: acestea trebuie să fie stabilite manual din pagina DHCP';