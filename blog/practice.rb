class Guitar

  attr_reader :type, :body_shape, :brand

  def initialize(type, body_shape, brand)
    @type = type
    @body_shape = body_shape
    @brand = brand
  end

end

class Player

  def play(guitar)
    puts "My guitar of choice is the #{guitar.type} #{guitar.brand}, #{guitar.body_shape} body style."
  end
end

guitar = Guitar.new("acoustic-electric", "auditorium", "Breedlove")
musician = Player.new
p musician.play(guitar)
