package miny;
import java.util.Random;
public class Miny {

  int mWidth = 20; 
  int mHeight = 20; 
  int mMines = 10; 
  char[][] mPole; 

  public Miny() {
    System.out.println("Generuji pole...");

    mPole = new char[mHeight][mWidth];

    System.out.println("Čistím pole...");

    clearMine();

    System.out.println("Umisťuji miny...");

    placeMines();
    drawMinefield();

  }

  public void placeMines() {
    int minesPlace = 0;
    Random random = new Random(); 
    while(minesPlace< mMines) {
      int x = random.nextInt(mWidth); 
      int y = random.nextInt(mHeight);
      
      if(mPole[y][x] != '*') {
        mPole[y][x] = '*';
        minesPlace ++;
      }
    }
  }

  public void clearMine() {
    
    for(int y = 0; y < mHeight; y ++) {
      for(int x = 0; x < mWidth; x ++) {
        mPole[y][x] = ' ';
      }
    }
  }

  public void drawMinefield() {
    for(int y = 0; y < mHeight; y ++) {
      for(int x = 0; x < mWidth; x ++) {
        System.out.print(mPole[y][x]);
      }
      System.out.print("\n");
    }
  }

  public static void main(String[] args) {
    Miny mineSweeper = new Miny();
  }
}

