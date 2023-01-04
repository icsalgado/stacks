package main

import (
	"fmt"
)

func main(){
	fmt.Println("Hello" + " world", 1+1)

	//inteiros sem sinais
	var variavelUm uint8 = 255 //cuidado com os tipos das variaveis e suas capacidades -  uint8 pode ser substituido por byte

	// alias uint depende da arquitetura da sistema operacional 32 ou 64 bits

	fmt.Println(variavelUm)

	//inteiros com sinais
	var variavelDois int8 = 127
	// tipo int32 tem o alias rune

	// alias int depende da arquitetura do SO

	fmt.Println(variavelDois)

	//Pontos flutuantes

	var variavelTres float32 = 39.9

	fmt.Println(variavelTres)

	//Numeros complexos
	var variavelQuatro complex64 = 3

	fmt.Println(variavelQuatro)

	//Strings
	var variavelCinco string = "Treina\nweb"
	var variavelSeis string = `Treina
	web`

	fmt.Println(variavelCinco)
	fmt.Println(variavelCinco[0]) //é um vetor de caractere mas vai retornar o unicode do caractere
	fmt.Println(variavelSeis)
	
	//declaração multipla
	var variavelSete, variavelOito string = "Curso", "Go basico" 

	fmt.Println(variavelSete + " " + variavelOito)

	var (
		nome string = "Iuri"
		idade int8 = 31
	)

	fmt.Println(nome)
	fmt.Println(idade)
	
	//inferência de tipos
	var variavelNove = "Tipo nao declarado"

	fmt.Println(variavelNove)

	// variavelNove = 2 // isso retorna erro por causa da tipagem forte

	variavelDez := "Sem declarar var" //atalho := para uma variavel

	fmt.Println(variavelDez)

	//constantes
	const PI float32 = 3.14

	fmt.Println(PI)






}
