/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package max;

/**
 *
 * @author PC
 */
public class Max {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int i=4;
        int j=5;
        int m=max(i,j);
        System.out.println("the max number is "+m);
    }
        static int max(int num1,int num2){
            int result;
            if(num1>num2)
                result=num1;
            else
                result=num2;
            return result;
                
            
        }
    }
    
