# 職場の外国人受入環境整備プロジェクト

## 開発ツール

- エディタ: Visual Studio Code
- 言語: PHP, Javascript, Typescript
- フレームワーク: Laravel 11.9
- JSライブラリ: React 18.3.1, (略) package.jsonを参照してください。

## 開発環境

### Local（仮想マシン）の場合

1. Xamppをインストール
   - \\\ls000\システム部\Project\S007_新東海ロジスティクス㈱\001_トラック待機時間 改善システム\開発環境\php\xampp-windows-x64-8.2.12-0-VS16-installer.exe
2. Composerをインストール
    - \\\ls000\システム部\Project\S007_新東海ロジスティクス㈱\001_トラック待機時間 改善システム\開発環境\php\Composer-Setup.exe
3. Node.jsをインストール
    - \\\ls000\システム部\Project\S007_新東海ロジスティクス㈱\001_トラック待機時間 改善システム\開発環境\nodejs\node-v20.15.0-x64.msi
4. MariaDbをインストール
   - \\\ls000\システム部\Project\S007_新東海ロジスティクス㈱\001_トラック待機時間 改善システム\開発環境\db\mariadb-10.3.39-winx64.msi

### Dockerの場合

0. WSLをインストール
   - ※インストールしなくても、Dockerはインストールできる
   - ※WSLインストール方法の場合、DockerにマウントするソースをWSL内に持ってきた方が処理速度が速くなる

1. Dockerをインストール
   - <https://docs.docker.jp/docker-for-windows/install.html>

2. [ Visual Studio Code ]の拡張機能から、[ Dev Containers ]をインストール
   - 拡張機能ID: ms-vscode-remote.remote-containers

3. [ .devcontainer ]があるディレクトリを[ Visual Studio Code ]で開く

4. [ コンテナーで再度開く ]を選択し、コンテナを構築

5. apache2 を権利者権限で再起動

   ``` shell
   sudo service apache2 restart
   ```

## composer

### パッケージをインストール

1. composer.jsonが存在するディレクトリに移動

   - Local の場合

      ``` shell
      cd ./src
      ```

   - Docker の場合

      ``` shell
      cd ./html/logistics
      ```

2. パッケージのインストール実行

   ``` shell
   composer install
   ```

## Node.js

### パッケージをインストール

1. package.jsonが存在するディレクトリに移動

   - Local の場合

      ``` shell
      cd ./src
      ```

   - Docker の場合

      ``` shell
      cd ./html/logistics
      ```

2. パッケージのインストール実行

   ``` shell
   npm install
   ```

   - VirtualBox(Windows10環境)で失敗する場合、--forceプロパティを付与  
     ※クロックの問題らしいのでVirtualBoxの設定で「ハードウェアクロックをUTCに」をONにすると改善するかも

### コンパイル

## 設定ファイルを取得

### .env.example をコピーする方法

1. コマンド入力

   ``` shell
   cd ./src
   cp .env.example .env
   php artisan key:generate
   ```

### 下記パスから設定ファイルを ./src 配下に格納

1. 下記パスから設定ファイルを ./src 配下に格納
   - \\\ls000\システム部\Project\S007_新東海ロジスティクス㈱\001_トラック待機時間 改善システム\98.設定ファイル\\.env

2. コマンド入力

   ``` shell
   php artisan key:generate
   ```

## DB接続方法

1. DB接続先を設定
   - d-0061の場合

      ``` env
      DB_CONNECTION=mysql
      DB_HOST=192.168.100.63
      DB_PORT=3306
      DB_DATABASE=logistics
      DB_USERNAME=logistics
      DB_PASSWORD=logistics
      ```

   - localの場合

      ``` env
      DB_CONNECTION=mysql
      DB_HOST=localhost
      DB_PORT=3306
      DB_DATABASE=[database名]
      DB_USERNAME=[ユーザー名]
      DB_PASSWORD=[パスワード]
      ```

   - dockerの場合

      ``` env
      DB_CONNECTION=mysql
      DB_HOST=db
      DB_PORT=3306
      DB_DATABASE=logistics
      DB_USERNAME=logistics
      DB_PASSWORD=logistics
      ```

## アプリをブラウザで表示

### dockerの場合

1. apache2を再起動

   ``` shell
   sudo service apache2 restart
   ```

2. reactをデバッグ実行

   ``` shell
   cd /var/www/html/logistics
   npm run dev
   ```

### ページを開く

   | URL |
   | :---: |
   | <http://localhost:8080/admin/login> |
   | <http://localhost:8080/driver/reception> |

## DBからモデル生成方法

1. 下記コマンドを実行

   ``` shell
   cd /var/www/html/logistics
   php artisan code:models
   ```
