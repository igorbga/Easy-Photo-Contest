<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Registration
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $surnames;

    /**
     * @Vich\UploadableField(mapping="epc_storage", fileNameProperty="photo1Name")
     *
     * @var File
     */
    private $photo1File;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $photo1Name;

    /**
     * @Vich\UploadableField(mapping="epc_storage", fileNameProperty="photo2Name")
     *
     * @var File
     */
    private $photo2File;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $photo2Name;

    /**
     * @Vich\UploadableField(mapping="epc_storage", fileNameProperty="photo3Name")
     *
     * @var File
     */
    private $photo3File;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $photo3Name;

    /**
     * @Vich\UploadableField(mapping="epc_storage", fileNameProperty="photo4Name")
     *
     * @var File
     */
    private $photo4File;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $photo4Name;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e.
     * not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image            
     *
     * @return Product
     */
    public function setPhoto1File(File $photo = null)
    {
        $this->photo1File = $photo;
        
        if ($photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
        
        return $this;
    }

    /**
     *
     * @return File
     */
    public function getPhoto1File()
    {
        return $this->photo1File;
    }

    /**
     *
     * @param string $photoName            
     *
     * @return Product
     */
    public function setPhoto1Name($photoName)
    {
        $this->photo1Name = $photoName;
        
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhoto1Name()
    {
        return $this->photo1Name;
    }

    /**
     * If manually uploading a file (i.e.
     * not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image            
     *
     * @return Product
     */
    public function setPhoto2File(File $photo = null)
    {
        $this->photo2File = $photo;
        
        if ($photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
        
        return $this;
    }

    /**
     *
     * @return File
     */
    public function getPhoto2File()
    {
        return $this->photo2File;
    }

    /**
     *
     * @param string $photoName            
     *
     * @return Product
     */
    public function setPhoto2Name($photoName)
    {
        $this->photo2Name = $photoName;
        
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhoto2Name()
    {
        return $this->photo2Name;
    }

    /**
     * If manually uploading a file (i.e.
     * not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image            
     *
     * @return Product
     */
    public function setPhoto3File(File $photo = null)
    {
        $this->photo3File = $photo;
        
        if ($photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
        
        return $this;
    }

    /**
     *
     * @return File
     */
    public function getPhoto3File()
    {
        return $this->photo3File;
    }

    /**
     *
     * @param string $photoName            
     *
     * @return Product
     */
    public function setPhoto3Name($photoName)
    {
        $this->photo3Name = $photoName;
        
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhoto3Name()
    {
        return $this->photo3Name;
    }

    /**
     * If manually uploading a file (i.e.
     * not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image            
     *
     * @return Product
     */
    public function setPhoto4File(File $photo = null)
    {
        $this->photo4File = $photo;
        
        if ($photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
        
        return $this;
    }

    /**
     *
     * @return File
     */
    public function getPhoto4File()
    {
        return $this->photo4File;
    }

    /**
     *
     * @param string $photoName            
     *
     * @return Product
     */
    public function setPhoto4Name($photoName)
    {
        $this->photo4Name = $photoName;
        
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhoto4Name()
    {
        return $this->photo4Name;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name            
     * @return Registration
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surnames
     *
     * @param string $surnames            
     * @return Registration
     */
    public function setSurnames($surnames)
    {
        $this->surnames = $surnames;
        
        return $this;
    }

    /**
     * Get surnames
     *
     * @return string
     */
    public function getSurnames()
    {
        return $this->surnames;
    }
}
