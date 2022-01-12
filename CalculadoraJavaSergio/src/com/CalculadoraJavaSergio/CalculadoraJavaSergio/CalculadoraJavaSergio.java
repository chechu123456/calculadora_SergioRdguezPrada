/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.CalculadoraJavaSergio.CalculadoraJavaSergio;

import java.util.Scanner;

/**
 *
 * @author DAW
 */
public class CalculadoraJavaSergio {

    /**
     *
     * @param args
     */
    public static void main(String[] args){
        
        Scanner sc = new Scanner(System.in);
        
        menu();
        int opc = sc.nextInt();
        
        System.out.println("");
        
        do{
            if(opc >0 && opc < 5){
                System.out.println("Inserta el valor del primer num: ");
                int num1 =  sc.nextInt();
                System.out.println("Inserta el valor del segundo num: ");
                int num2 = sc.nextInt();
                System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*");
                System.out.println("El resultado es:");
            
                switch(opc){
                    case 1:
                        System.out.println(sumar(num1, num2));                    
                        break;                    

                    case 2:
                        System.out.println(restar(num1, num2));                    
                        break;

                    case 3: 
                        System.out.println(multiplicar(num1, num2));                    
                        break;
                    case 4:
                        System.out.println( dividir(num1, num2));                   
                        break;
                   
                }
            }else{
                System.out.println("Opción del menú no válida");
            }
                
            System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*");
            System.out.println("");
            menu();
            opc = sc.nextInt(); 
                       
        }while(opc != 0);
    }
    
    /**
     *
     */
    public static void menu(){
        System.out.println("--------------------");
        System.out.println("Menu:");
        System.out.println("--------------------");
        System.out.println("1- Sumar");
        System.out.println("2- Restar");
        System.out.println("3- Multiplicar");
        System.out.println("4- Dividir");
        System.out.println("****************************");
        System.out.println("Introduce un valor del menu. Pulsa 0 para salir");
    }
    
    /**
     *
     * @param num1
     * @param num2
     * @return
     */
    public static int sumar(int num1, int num2){
        int suma = num1 + num2;
        return suma;
    }
    
    /**
     *
     * @param num1
     * @param num2
     * @return
     */
    public static int restar(int num1, int num2){
        int resta = num1 - num2;
        return resta;
    }
    
    /**
     *
     * @param num1
     * @param num2
     * @return
     */
    public static int multiplicar( int num1, int num2){
        int multi = num1 * num2;
        return multi;
    }
    
    /**
     *
     * @param num1
     * @param num2
     * @return
     */
    public static int dividir(int num1, int num2){
        int division = 0;
        if(num2 != 0){
            division = num1 / num2;
        }else{
            System.out.println("Error en la división, no se puede dividir entre 0");
        }       
        return division;
    }

}
