'''
01 - Atividade 
- O sistema deve solicitar um número ao usuario
- se o numero for menor ou igual a 0 peça que o usuario digite novamente até receber um numero valido
- o sistema deve percorrer do 0 até o numero escolhido
- no laço se o numero for PAR deve focar em Azul e se for IMPAR deve ficar Vermelho
'''

numero = input('Digite um Número Maior Que 0: ');
while int(numero) == 0 or -0:
    numero = input('\nDigite Um Novo Número: ');
if int(numero) <= 0:
    numero = input('\nDigite Um Novo Número: ');
    print('\n');
elif int(numero) != 0:
   print('\n');
for i in range(0, int(numero) + 1):
    if i % 2 == 0:
        print('\033[31m' + str(i) + '\033[31m');
    else:
        print('\033[34m' + str(i) + '\033[34m');
print('\n');