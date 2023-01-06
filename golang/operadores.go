package main
import (
	"fmt"
	"strconv"
)

func main(){
	var numero1 int
	var numero2 int

	fmt.Print("Digite um numero: ")
	fmt.Scanln(&numero1) //indicar o ponteiro como no C
	fmt.Print("Digite um outo numero: ")
	fmt.Scanln(&numero2) //indicar o ponteiro como no C

	fmt.Printf("%d + %d = %d\n", numero1, numero2, numero1+numero2) //impressao formatada
	fmt.Printf("%d - %d = %d\n", numero1, numero2, numero1-numero2) //impressao formatada
	fmt.Printf("%d * %d = %d\n", numero1, numero2, numero1*numero2) //impressao formatada
	fmt.Printf("%d / %d = %d\n", numero1, numero2, numero1/numero2) //impressao formatada
	fmt.Printf("%d %% %d = %d\n", numero1, numero2, numero1%numero2) //impressao formatada
	numero1++
	numero2--
	fmt.Printf("%d\n", numero1)
	fmt.Printf("%d\n", numero2)

	var texto string
	fmt.Print("Digite mais um numero: ")
	fmt.Scanf("%s", &texto)
	var numero int

	numero, _ = strconv.Atoi(texto) //converte string para inteiro, retorna int ou erro, o _ ignora o erro blank identifier

	fmt.Println(numero)

	numero0, _ := strconv.ParseInt(texto, 10, 32) //converte texto para inteiro em decimal com int32

	fmt.Println(numero0)
}