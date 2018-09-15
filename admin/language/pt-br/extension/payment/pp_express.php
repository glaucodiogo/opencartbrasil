<?php
// Heading
$_['heading_title']					 = 'PayPal Express Checkout';

// Text
$_['text_extension']				 = 'Extensões';
$_['text_success']				 	 = 'PayPal Express Checkout modificado com sucesso!';
$_['text_edit']                      = 'Editando PayPal Express Checkout';
$_['text_pp_express']				 = '<a target="_blank" href="https://www.paypal.com/pt/webapps/mpp/merchant"><img src="view/image/payment/paypal.png" alt="PayPal Express Checkout" title="PayPal Express Checkout" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Somente autorização';
$_['text_sale']						 = 'Autorização e captura';
$_['text_signup']                    = 'Inscreva-se para PayPal Live - salve suas configurações primeiro, pois essa página será atualizada';
$_['text_sandbox']                   = 'Inscreva-se para PayPal Sandbox - salve suas configurações primeiro, pois essa página será atualizada';
$_['text_configure_live']            = 'Live';
$_['text_configure_sandbox']         = 'Sandbox';
$_['text_show_advanced']             = 'Exibir configuração avançada';
$_['text_show_quick_setup']          = 'Exibir configuração rápida';
$_['text_quick_setup']             	 = 'Configuração rápida - Vincule uma conta existente ou crie uma nova conta do PayPal para começar a aceitar pagamentos.';
$_['text_paypal_consent']		 	 = 'Ao utilizar a ferramenta de configuração rápida, você permite que o PayPal receba informações da sua loja.';
$_['text_success_connect']			 = 'Você conectou sua conta ao PayPal!';
$_['text_preferred_main']		 	 = 'Fornece aos seus compradores uma experiência de compra simplificada em vários dispositivos móveis que os mantém em sua loja durante todo o processo de autorização de pagamento.';
$_['text_learn_more']			 	 = '(Saber mais)';
$_['text_preferred_li_1']			 = 'Comece a aceitar o PayPal em três cliques';
$_['text_preferred_li_2']			 = 'Aceite pagamentos de todo o mundo';
$_['text_preferred_li_3']			 = 'Oferecer atalho para check-out expresso, permitindo que os compradores façam o check-out diretamente da página do seu carrinho';
$_['text_preferred_li_4']			 = 'Melhore a conversão com check-out do PayPal One Touch e In-Context';
$_['text_connect_paypal']			 = 'Conecte-se com o PayPal';
$_['text_incontext_not_supported']	 = '* Não suportado com check-in no contexto';
$_['text_retrieve']	 				 = 'Seus detalhes foram inseridos no PayPal';
$_['text_enable_button']			 = 'Recomendamos oferecer o atalho do PayPal Express para maximizar a conversão de sua loja. Isso permite que os clientes usem as informações deles no PayPal e <strong>finalizem o pedido em três passos</strong> a partir da página do carrinho. Clique em habilitar para instalar a extensão e acessar o gerenciador de layout, onde você deverá adicionar o "PayPal Express Checkout botão" ao layout do checkout de sua loja.';

// Entry
$_['entry_username']				 = 'API Username';
$_['entry_password']				 = 'API Password';
$_['entry_signature']				 = 'API Signature';
$_['entry_sandbox_username']		 = 'API Sandbox Username';
$_['entry_sandbox_password']		 = 'API Sandbox Password';
$_['entry_sandbox_signature']		 = 'API Sandbox Signature';
$_['entry_ipn']						 = 'IPN URL';
$_['entry_test']					 = 'Modo sandbox?';
$_['entry_debug']					 = 'Habilitar debug?';
$_['entry_currency']				 = 'Moeda padrão';
$_['entry_recurring_cancel']	     = 'Permitir que os clientes cancelem pagamentos recorrentes?';
$_['entry_transaction']		         = 'Tipo de captura';
$_['entry_total']					 = 'Total mínimo';
$_['entry_geo_zone']				 = 'Região geográfica';
$_['entry_status']					 = 'Situação';
$_['entry_sort_order']				 = 'Posição';
$_['entry_canceled_reversal_status'] = 'Venceu a disputa';
$_['entry_completed_status']		 = 'Completo';
$_['entry_denied_status']			 = 'Negado';
$_['entry_expired_status']			 = 'Expirado';
$_['entry_failed_status']			 = 'Falhou';
$_['entry_pending_status']			 = 'Pendente';
$_['entry_processed_status']		 = 'Processado';
$_['entry_refunded_status']			 = 'Reembolsado';
$_['entry_reversed_status']			 = 'Em disputa';
$_['entry_voided_status']			 = 'Cancelado';
$_['entry_allow_notes']				 = 'Permitir anotações';
$_['entry_colour']	      			 = 'Cor de fundo da página';
$_['entry_logo']					 = 'Logo';
$_['entry_incontext']				 = 'Desativar o check-in no contexto';

// Tab
$_['tab_api']				         = 'Detalhes da API';
$_['tab_order_status']				 = 'Situações do pedido';
$_['tab_checkout']					 = 'Finalização';

// Help
$_['help_ipn']						 = 'Obrigatório para assinaturas';
$_['help_total']					 = 'O total de checkout que o pedido deve atingir antes que esse método de pagamento seja ativado';
$_['help_logo']						 = 'Máximo de 750px(w) x 90px(h)<br>Você só deve usar uma logo se estiver com o SSL habilitado na loja.';
$_['help_colour']					 = '6 caracteres com o código de cor HTML';
$_['help_currency']					 = 'Usado para pesquisas de transações';

// Error
$_['error_permission']				 = 'Atenção: Você não tem permissão para modificar a extensão PayPal Express Checkout!';
$_['error_username']				 = 'API Username é obrigatório!';
$_['error_password']				 = 'API Password é obrigatório!';
$_['error_signature']				 = 'API Signature é obrigatório!';
$_['error_sandbox_username']	 	 = 'API Sandbox Username é obrigatório!';
$_['error_sandbox_password']		 = 'API Sandbox Password é obrigatório!';
$_['error_sandbox_signature']		 = 'API Sandbox Signature é obrigatório!';
$_['error_api']						 = 'Erro de autorização do Paypal Live';
$_['error_api_sandbox']				 = 'Erro de autorização do Paypal Sandbox';
$_['error_consent']				 	 = 'Para usar a configuração rápida, você precisa permitir que o PayPal use as informações da sua loja.';