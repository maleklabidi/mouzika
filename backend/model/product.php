<?PHP
	class product{
		private  $id = null;
		private  $product_name = null;
		private  $product_pricelow = null;
		private  $product_qty = null;
        private  $product_image = null;
		private  $product_category = null;
		private  $product_description = null;
        private  $product_pricehigh = null;
		private  $product_brand = null;
		
		
		function __construct(string $product_name,int $product_pricelow, int $product_qty,string $product_image,string $product_category,string $product_description,int $product_pricehigh,string $product_brand){
			
			$this->product_name = $product_name;
			$this->product_pricelow=$product_pricelow;
            $this->product_qty=$product_qty;
			$this->product_image=$product_image;
            $this->product_category=$product_category;
            $this->product_description=$product_description;
            $this->product_pricehigh=$product_pricehigh;
            $this->product_brand=$product_brand;
            
		}
		
		function getId(): int{
			return $this->id;
		}
		function getproduct_name(): string{
			return $this->product_name;
		}
		
		
		function getproduct_pricelow(): int{
			return $this->product_pricelow;
		}
		function getproduct_qty(): int{
			return $this->product_qty;
		}
        function getproduct_image(): string{
			return $this->product_image;
		}
        function getproduct_category(): string{
			return $this->product_category;
		}
        function getproduct_description(): string{
			return $this->product_description;
		}
        function getproduct_pricehigh(): int{
			return $this->product_pricehigh;
		}
        function getproduct_brand(): string{
			return $this->product_brand;
		}

		function setproduct_name(string $product_name): void{
			$this->product_name=$product_name;
		}
		
		function setproduct_pricelow(int $product_pricelow): void{
			$this->product_pricelow=$product_pricelow;
		}
		function setproduct_qty(int $product_qty): void{
			$this->product_qty=$product_qty;
		}
        function setproduct_image(string $product_image): void{
			$this->product_image=$product_image;
		}
        function setproduct_category(string $product_category): void{
			$this->product_category=$product_category;
		}
        function setproduct_description(string $product_description): void{
			$this->product_description=$product_description;
		}
        function setproduct_pricehigh(int $product_pricehigh): void{
			$this->product_pricehigh=$product_pricehigh;
		}
        function setproduct_brand(string $product_brand): void{
			$this->product_brand=$product_brand;
		}
	}
?>