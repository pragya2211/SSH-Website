package jsoup;

import java.io.File;
import java.io.IOException;
import java.net.URISyntaxException;
import java.net.URL;

import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
import java.util.*;

public class Jsoup {
   public static void main(String[] args) throws IOException, URISyntaxException {
      
      URL path = ClassLoader.getSystemResource("Student.html");
      File input = new File(path.toURI());
      Document document = org.jsoup.Jsoup.parse(input, "UTF-8");
      //System.out.println(document.title());
      //System.out.println(document.body());
      //Elements links = document.select("a[href]");  
      /*for (Element link : links) {  
          System.out.println("\nlink : " + link.attr("href"));  
          System.out.println("text : " + link.text());  
      }*/
      /*Elements class_1 = document.getElementsByTag("h2");
      for (Element paragraph : class_1) {
            System.out.println(paragraph.text());
      }
      Elements detailsofClass = document.getElementsByTag("pre");
      for (Element paragraph : detailsofClass) {
            System.out.println(paragraph.text());
      }
      System.out.println();
      Elements abc = document.select("span");
      Elements description = document.select("div.block");
      for (Element paragraph : description) {
          System.out.println(paragraph.text());
          System.out.println();
    }*/
      
      
      
      
      
      
      
      //for methods!!
      /*System.out.println("Following are the methods in the program:");
      Elements methods = document.select("pre.methodSignature");
      for(Element para: methods )
      {
          System.out.println(para.text());
      }
      System.out.println();
      //for parameters
      System.out.println("Following are the parameters and return types for the functions:");
      Elements a = document.select("dl");
      for(Element para: a )
      {
          System.out.println(para.text());
      }*/
      ArrayList<String> arr = new ArrayList<String>();
      Elements a = document.select("li.blockList");
      for(Element para: a )
      {
          boolean x = false;
          String bc = para.text();
          if(bc.contains("Method") ||bc.contains("Constructor") )
          {
              continue;
          }
          else
          {
              System.out.println(bc);
              System.out.println();  
          }
          
          
          
          
      }
   }
   
   
   
   
}
