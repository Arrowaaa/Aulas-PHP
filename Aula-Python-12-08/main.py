'''
Criação de um jogo de Campo Minado

01 - Atividade 
- O sistema deve solicitar um número ao usuario
- se o numero for menor ou igual a 0 peça que o usuario digite novamente até receber um numero valido
- o sistema deve percorrer do 0 até o numero escolhido
- no laço se o numero for PAR deve focar em Azul e se for IMPAR deve ficar Vermelho

numero = input('Digite um Número Maior Que 0: ');
while int(numero) <= 0:
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
'''

'''
02 - Solicitar ao usuario um digito
deve apresentar a quantidade em Asteristico (*) na tela
solicitar 2 número, deve ser a quantidade de linhas apresentada em tela
'''
'''
var = ''
quantidade_Coluna = int(input("Digite a quantidade de Coluna(s) por linha(s): "));
quantidade_Linhas = int(input("Digite a quantidade de Linhas: "));


for i in range(int(quantidade_Linhas)):
    for var in range(0, int(quantidade_Coluna)):
        print('*' * quantidade_Coluna);
    print()    
'''
'''


quantColuna = 0;
quantLinhas = 0;

quantColuna = int(input("Digite a quantidade de Coluna(s) por linha(s): "))
quantLinhas = int(input("Digite a quantidade de Linhas: "))

for i in range(int(quantLinhas)):
    for j in range(0, int(quantColuna)):
        print('{:1}' .format('*'), end=''); #{} é a quantidade de espaçamento que ficará entre cada caracteres, e o format é o formato que o caracteres terá
    print()
'''

from openpyxl import Workbook, load_workbook

def config():
    try:
        wb = load_workbook(filename='Campo.xlsx')
        config = wb['config']
    except:
        wb= Workbook()
        config = wb.create_sheet('config')
        config.cell(column=1, row=1, value="linha")
        config.cell(column=2, row=1, value= 5)
        config.cell(column=1, row=2, value="coluna")
        config.cell(column=2, row=2, value= 5)

    linhas = config.cell(column=2, row=1).value
    colunas = config.cell(column=2, row=2).value

    wb.save('Campo.xlsx')
    return linhas, colunas

def criarTabuleiro(quantColunas, quantLinhas):
    for i in range(int(quantLinhas)):
        for j in range(0, int(quantColunas)):
            print('{:5}' .format('[ ]'), end='');
        print() 

    
# quantColuna = int(input("Digite a quantidade de Coluna(s) por linha(s): "))
# quantLinhas = int(input("Digite a quantidade de Linhas: "))

quantLinhas, quantColunas = config();
criarTabuleiro(quantColunas, quantLinhas);

'''
Crie o menu de acesso do jogo com as seguintes opções "jogar, configurar, sair"
Hoje a gente vai criar o configurar, de as opções ao usuario para ele configurar o jogo dele
Nessas configurações coloque uma terceira config "dificuldade" o usuario vai pode escolher entre 1 - 3
'''


while True:
    opcao = int(input("Escolha uma opção do Menu: "))

    if opcao == '1':
        print("Iniciando o jogo...")
    elif opcao == '2':
        print("Configurar o jogo..")
    elif opcao == '3':
        print("Saindo do jogo...")
    else:
        print( '\033[31m'"Opção inválida!"'\033[0;0m')



def menu_principal():
    print("Menu Principal")
    print("1. Jogar")
    print("2. Configurar")
    print("3. Sair")

    opcao = int(input("Escolha uma opção do Menu: "))

    if opcao == 1:
        print("Iniciando o jogo...")
    elif opcao == 2:
        menu_configuracao()
    elif opcao == 3:
        print("Saindo do jogo...")
    else:
        print("Opção inválida!")
        menu_principal()
        
def menu_configuracao():
    print("Você Entrou Nas Configurações do Jogo!")
    print("1. Dificuldade")
    print("2. Voltar ao Menu Principal")
    
    opcao = int(input("Escolha A dificuldade: "))

    if opcao == 1:
        configurar_dificuldade()
    elif opcao == 2:
        menu_principal()
    else:
        print("Opção inválida!")
        menu_configuracao()

def configurar_dificuldade():
    print("\nConfigurar Dificuldade")
    print("1. Fácil")
    print("2. Médio")
    print("3. Difícil")

    dificuldade = int(input("Escolha a dificuldade: "))
    
    if dificuldade in [1, 2, 3]:
        print(f"Dificuldade configurada para {dificuldade}")
    else:
        print("Opção inválida!")
        configurar_dificuldade()

menu_principal()
