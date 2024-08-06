# Comentário em linha: Fazer um campo minado

# Site para testar cores e etc.. "https://wiki.python.org.br/CoresNoTerminal"


print('\n')
print('Bem Vindo ao Sistema!')
numero = input('\nDigite um Número: ')
print('\nSeu número é ' + numero)
    
print('\n')
# Imagem ASCII
print("""                                    $$$$
                                  $$    $
                                 $       $
   $$$$                         $         $
  $    $$                      $    $     $
 $       $$                   $    $$$    $
 $         $$     $$$$ $$$   $    $$$$$   $
$            $ $$$  $$$  $$ $    $$$$$$   $
$    $$       $ $$  $$$  $$$    $$$$$$$   $
$   $$$$       $$$$ $$$   $$     $$$$$$   $
$   $$$$$$     $$$$ $$$$  $$$      $$$$$  $
$   $$$$$$$    $$$$ $$$$  $$$        $$$  $
$   $$$$$      $$$$ $$$$  $$$$            $
$   $$$$       $$$$ $$$$  $$$$            $
$   $$$        $$$$ $$$$  $$$$            $  
$   $$         $$$$  $$$  $$$$            $  
$              $$$   $$$   $$$            $  
$               $     $     $             $  
 $                                         $ 
$                                $$$$       $
$                               $  $$$      $
$          $$$$                $$  $$$$     $
$         $$$  $               $$$$$$$$     $
$        $$$$  $               $$$$$$$$     $
$        $$$$$$$$              $$$$$$$$     $
$        $$$$$$$$               $$$$$$      $
$        $$$$$$$$       $   $    $$$$       $
$         $$$$$$     $  $$ $                $
$          $$$$       $$  $                $ 
 $                     $  $               $  
  $                     $$               $   
   $                              $$$   $    
    $$                           $   $ $     
      $$$                       $     $      
         $$$$             $$$$$$      $      
   $$        $$$$$$$$$$$$$            $      
  $  $        $   $                 $$       
  $   $       $    $             $$$         
  $   $        $    $           $$           
  $$$$$$       $    $          $  $          
   $   $$       $   $         $    $         
   $$$$$$$   $$$ $$$         $     $         
    $   $$$$$  $     $       $     $         
     $  $      $     $       $     $         
      $$$$$$$$$$     $       $    $          
                $$$$$         $$$$           
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$           
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$           
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$            
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ """)
    
print('\n')

print("""\033[44m Art by Blazej Kozlowski                                     
           __.                                              
        .-".'                      .--.            _..._    
      .' .'                     .'    \       .-""  __ ""-. 
     /  /                     .'       : --..:__.-""  ""-. \
    :  :                     /         ;.d$$    sbp_.-""-:_:
    ;  :                    : ._       :P .-.   ,"TP        
    :   \                    \  T--...-; : d$b  :d$b        
     \   `.                   \  `..'    ; $ $  ;$ $        
      `.   "-.                 ).        : T$P  :T$P        
        \..---^..             /           `-'    `._`._     
       .'        "-.       .-"                     T$$$b    
      /             "-._.-"               ._        '^' ;   
     :                                    \.`.         /    
     ;                                -.   \`."-._.-'-'     
    :                                 .'\   \ \ \ \         
    ;  ;                             /:  \   \ \ . ;        
   :   :                            ,  ;  `.  `.;  :        
   ;    \        ;                     ;    "-._:  ;        
  :      `.      :                     :         \/         
  ;       /"-.    ;                    :                    
 :       /    "-. :                  : ;                    
 :     .'        T-;                 ; ;                    
 ;    :          ; ;                /  :                    
 ;    ;          : :              .'    ;                   
:    :            ;:         _..-"\     :                   
:     \           : ;       /      \     ;                  
;    . '.         '-;      /        ;    :                  
;  \  ; :           :     :         :    '-.                
'.._L.:-'           :     ;          ;    . `.              
                     ;    :          :  \  ; :              
                     :    '-..       '.._L.:-'              
                      ;     , `.                            
                      :   \  ; :                            
                      '..__L.:-'
      \033[0;0m""")

# Informações do usuário
nome = 'Arrow'
idade = 25
endereco = 'Rua dos Bobos'
numero = 0
telefone = '19 9 4002 8922'
print('\n')
print('\nCaro Sr. ' + nome + ' com a idade ' + str(idade) + ' do endereço ' + endereco + 
    ' com o número ' + str(numero) + ' com o telefone ' + telefone)
print('\n')
print('\nCaro Sr. {} com a idade {} do endereço: {} N°: {} e telefone: {}'
    .format(nome, idade, endereco, numero, telefone))

# Verificação da idade
if idade < 10:
    print('Você é Criança')
elif 10 <= idade < 18:
    print('Você é Adolescente')
else:
    print('Você é Adulto')

# Verificação de vogal
vogal = ['a', 'e', 'i', 'o', 'u']
if 'i' in vogal:
    print('É Vogal!')
else:
    print('Não é Vogal!')

# Exemplo de repetição
for cont in range(5):
    print('Dom Dom')

# Exemplo de repetição
for i in range(10,11):
    print(str(i) + 'Vamos lá');

for letra in 'Santos na Série B':
    print(letra);




