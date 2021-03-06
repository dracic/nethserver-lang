<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Atribuição de IP';
$L['bootproto_none_label'] = 'Estático';
$L['blue_label'] = 'Convidados (azul)';
$L['device_label'] = 'Dispositivo';
$L['gateway_label'] = 'Porta de saída';
$L['green_label'] = 'LAN (verde)';
$L['hwaddr_label'] = 'Endereço MAC';
$L['ipaddr_label'] = 'Endereço IP';
$L['orange_label'] = 'DMZ (laranja)';
$L['Key_label'] = 'Dispositivo';
$L['netmask_label'] = 'Mascara de rede';
$L['NetworkAdapter_Description'] = 'Alterar definições de rede';
$L['NetworkAdapter_Tags'] = 'adaptador de redes ethernet';
$L['NetworkAdapter_Title'] = 'Rede';
$L['red_label'] = 'Internet (vermelho)';
$L['role_label'] = 'Função';
$L['update_header_label'] = 'Atualizar dispositivo';
$L['interface-config_label'] = 'Configuração da interface';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP só pode ser usado em interfaces Vermelha e Verde";
$L['valid_platform,interface-config,interface-role,4'] = "Não é possível apagar a última interface verde";
$L['No'] = 'Não';
$L['Yes'] = 'Sim';
$L['type_alias_label'] = 'Nome';
$L['type_bridge_label'] = 'Ponte';
$L['type_bond_label'] = 'vinculo';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configure a atribuição de IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Nova interface lógica';
$L['CreateLogicalInterface_header'] = 'Nova interface lógica';
$L['vlanTag_label'] = 'Etiqueta';
$L['vlan_label'] = 'Interface';
$L['InterfaceType_label'] = 'Tipo';
$L['Next_label'] = 'Seguinte';
$L['Back_label'] = 'Anterior';
$L['Edit_label'] = 'Editar';
$L['Edit_header'] = 'Editar ${dev} - ${bus} ${model}';
$L['Edit_description'] = "O estado da ligação é \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nEndereço Mac \${mac}";
$L['Link_status_up'] = 'acima';
$L['Link_status_down'] = 'abaixo';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Velocidade ${0}';
$L['Confirm_header'] = 'Novo ${role} interface ${device}';
$L['Action_create_bridge'] = 'Nova ponte ${device} com ${parts}';
$L['Action_create_bond'] = 'Criar uma nova ${bondMode} interface de vinculo ${device} com ${parts}';
$L['Action_create_vlan'] = 'Nova VLAN ${device} em ${parts}';
$L['Action_create_role'] = 'Definir função para "${role}"';
$L['Action_set_static_ip'] = 'Definir IP estático ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obter configuração IP a partir de um servidor DHCP';
$L['Action_use_gateway'] = 'Usar a porta de saída ${gateway}';
$L['Action_use_no_gateway'] = 'Não definir porta de saída';
$L['Create_label'] = 'Nova interface';
$L['bridged_label'] = 'Em ponte';
$L['slave_label'] = 'Secundário';
$L['CreateIpAlias_header'] = 'Novo nome IP "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Liberar ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Liberar função ${role} atribuída a interface física ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remover ${device} do vinculo ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Remover ${device} da ponte ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Apagar';
$L['DeleteLogicalInterface_header'] = 'Confirmar eliminação de ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Apagar vinculo da interface \${device}.\nEscolha um sucessor das interfaces secundárias para configurá-la com as funções e definições de IP atuais";
$L['DeleteLogicalInterface_bridge_message'] = "Apagar ponte \${device}.\nEscolha um sucessor das interfaces em ponte para configurá-la com as funções e definições de IP atuais";
$L['DeleteLogicalInterface_vlan_message'] = "Confirmar eliminação da VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirmar eliminação do nome \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Função de versão';
$L['Release_label'] = 'Função de versão';
$L['CleanPhysicalInterface_label'] = 'Eliminar';
$L['CreateIpAlias_label'] = 'Novo nome IP';
$L['successor_label'] = 'Sucessor';
$L['NoSuccessor_label'] = 'Nenhum';
$L['bond_label'] = 'Vinculo';
$L['bridge_label'] = 'Ponte';
$L['alias_label'] = 'Nome';
$L['hotspot_label'] = 'Ponto de acesso';
$L['RenameInterface_header'] = 'Atribuir funções as interfaces físicas';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Interfaces físicas';
$L['CleanPhysicalInterface_header'] = 'Remover ${0}';
$L['Confirm device ${0} removal'] = 'Remover o dispositivo ${0} da base de dados?';
$L['Clean_label'] = 'Remover';
$L['Refresh_label'] = 'Atualizar estado do link';
$L['roleis_label'] = 'função';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Modelo ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Todas as funções estão corretamente atribuídas aos adaptadores de rede';
$L['type_xdsl_label'] = 'PPPoE ligado em ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Nome de usuário';
$L['PppoePassword_label'] = 'Senha';
$L['PppoeInterface_label'] = 'Interface ethernet';
$L['PppoeProvider_label'] = 'Provedor';
$L['pppoe_label'] = 'PPPoE (vermelho)';
$L['SetPppoeParameters_label'] = 'Configurar PPPoE';
$L['SetPppoeParameters_header'] = 'Configurar PPPoE dispositivo ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Liberar PPPoE função vermelho de \${device}?\nO dispositivo ppp0 associado também será removido.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remover o dispositivo lógico PPPoE de ppp0?";
$L['valid_pppoe_already_configured'] = 'O PPPoE do dispositivo ppp0 já está configurado';
$L['valid_pppoe_red_role_only'] = 'O PPPoE do dispositivo ppp0 deve ser atribuído na função vermelha';
$L['PppoeAuthType_label'] = 'Tipo de autenticação';
$L['AuthType_auto'] = 'Automático';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Modo';
$L['BondMode_0_label'] = 'vinculo balanceado';
$L['BondMode_1_label'] = 'backup ativo';
$L['BondMode_2_label'] = 'balanceamento XOR';
$L['BondMode_3_label'] = 'broadcast';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balanceamento TLB';
$L['BondMode_6_label'] = 'balanceamento ALB';
$L['red_label'] = 'Internet (vermelho)';
$L['multiwan_label'] = 'Varias WAN';
$L['Weight_label'] = 'Peso do Link';
$L['ProviderName_label'] = 'Nome do Link';
$L['UpstreamProxy_label'] = 'Configurações do Proxy';
$L['DNS_label'] = 'Servidores DNS';
$L['trafficshaping_label'] = 'Prioridades de tráfego de dados';
$L['FwInBandwidth_label'] = 'Largura de banda de entrada (kbps)';
$L['FwOutBandwidth_label'] = 'Largura de banda de saída (kbps)';
$L['valid_platform,logical-interface-create,dhcp-conflicts,3'] = 'Algumas interfaces possuem intervalos DHCP associados: eles devem ser corrigidos manualmente a partir da página DHCP';